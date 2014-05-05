<?php
$dodano = false;
if(!empty($_POST))
{
    if(isset($_POST['uczen']) && isset($_POST['dzien']) && isset($_POST['miesiac']) && isset($_POST['rok']))
    {
        $ile = count($_SESSION['view'][$_POST['uczen']]);
        $dodaj = $_POST['dzien']."-".$_POST['miesiac']."-".$_POST['rok'];
        $ileNowa = array_push($_SESSION['view'][$_POST['uczen']], $dodaj);
        if($ile!=$ileNowa) $dodano = true;
    }
}
?>
<div class="obecnosci container">
    <form role="form" action="index.php?page=dodaj-obecnosci" method="POST" name="d-obec" onSubmit="return sprawdz_obec()">
        <div class="row">
            <div class="col-sm-12">
                <div id="d-uczen" class="form-group">
                    <label for="Select">Wybierz ucznia</label>
                    <select name="uczen" class="form-control">
                        <option value="0"></option>
                        <?php 
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
        <div class="row">
            <div class="col-sm-4">
                <div id="d-dzien" class="form-group">
                    <label for="Select">Wybierz dzień</label>
                    <select name="dzien" class="form-control">
                        <option value="0"></option>
                        <?php 
                            for($i=1; $i<=31; $i++)
                                echo '<option value="'.$i.'">'.$i.'</option>';
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="d-mies" class="form-group">
                    <label for="Select">Wybierz miesiąc</label>
                    <select name="miesiac" class="form-control">
                        <option value="0"></option>
                        <?php 
                            for($i=1; $i<=12; $i++)
                                echo '<option value="'.$i.'">'.$i.'</option>';
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div id="d-rok" class="form-group">
                    <label for="Select">Wybierz rok</label>
                    <select name="rok" class="form-control">
                        <option value="0"></option>
                        <?php                                   
                            for($i=1980; $i<=2014; $i++)
                                echo '<option value="'.$i.'">'.$i.'</option>';
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-default">Zapisz</button>
            </div>
        </div>    
    </form>
</div>
<?php
    if($dodano)
    {
        echo "<div class=\"container\"><div class=\"row\"><div class=\"col-sm-12 \">Dodano obecność w dniu: ".$dodaj." do użytkownika: ".$_SESSION['users'][$_POST['uczen']][0]." ".$_SESSION['users'][$_POST['uczen']][1]."</div></div></div>";
    }
?>