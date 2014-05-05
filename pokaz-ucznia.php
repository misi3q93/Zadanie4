<div class="container">
    <form role="form" action="index.php?page=pokaz-ucznia" method="POST">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="Select">Wybierz ucznia</label>
                    <select name="uczen" class="form-control" onchange="if(this.selectedIndex>0) this.form.submit()">
                    <?php
                        echo '<option value="0"></option>';
                        foreach ($_SESSION['users'] as $lp => $wartosc)
                        {
							echo '<option value="'.$lp.'">';
							for($i=0; $i<count($wartosc); $i++)
                            {
								echo $wartosc[$i]." ";
							}
							echo "</option>";
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
                <tr class="active"><td>Lp.</td><td>Imię</td><td>Nazwisko</td><td>Obecny w dniach:</td></tr>
                <?php
                    if(!empty($_POST))
                    {
                        $uczen = $_POST['uczen'];
                        echo "<tr>";
                        echo "<td><b>".$uczen."</b></td><td>".$_SESSION['users'][$uczen][0]."</td><td>".$_SESSION['users'][$uczen][1]."</td><td>";
                        $przebieg = 0;
                        foreach ($_SESSION['view'][$uczen] as $kiedy) 
                        {
                            if($przebieg!=0) echo $kiedy.", ";
                            else $przebieg = 1;
                        }
                        echo "</td></tr>";   
                    }
                ?>
            </table>
        </div>
    </div>
</div>