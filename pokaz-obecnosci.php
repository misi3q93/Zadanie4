<div class="container">
    <form role="form" action="index.php?page=pokaz-obecnosci" method="POST">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="Select">Wybierz dzień</label>
                    <select name="dzien" class="form-control" onchange="if(this.selectedIndex>0) this.form.submit()">
                    <?php
                        $tab = array();
                        foreach ($_SESSION['view'] as $lp => $wartosc)
                        {
							for($i=0; $i<count($wartosc); $i++)
							{ 
                                $tab[] = $wartosc[$i];
							}
						}
                        foreach (array_unique($tab) as $key)
                        {
                            echo '<option value="'.$key.'">'.$key."</option>";
                        }  
                    ?>
                    </select>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <tr class="active"><td>Lp.</td><td>Imię</td><td>Nazwisko</td></tr>
                <?php
                    if(!empty($_POST))
                    {
                        $dzien = $_POST['dzien'];
                        echo "<b>Dzien: ".$dzien."</b><br />";
                        foreach ($_SESSION['view'] as $lp => $wartosc)
                        {
                            if(array_search($dzien, $_SESSION['view'][$lp])!=false) 
                            {
                                echo '<tr><td><b>'.$lp.'</b></td><td>'.$_SESSION['users'][$lp][0].'</td><td>'.$_SESSION['users'][$lp][1].'</td></tr>';
                            }
                        }
                    }
                ?>
            </table>
        </div>
    </div>
</div>