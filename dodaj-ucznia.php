<?php
    $dodano = false;
    if(isset($_POST['imie']) && isset($_POST['nazwisko']))
    {
        $ile = count($_SESSION['users']);
        $ileNowa = array_push($_SESSION['users'], array($_POST['imie'], $_POST['nazwisko']));
        array_push($_SESSION['view'], array(''));
        if($ile!=$ileNowa) $dodano = true;
    }
?>
<div class="uczen container">
    <form class="form-horizontal" role="form" action="index.php?page=dodaj-ucznia" method="POST" name="d-uczen" onSubmit="return sprawdz_ucznia()">
        <div class="row">
            <div id="d-imie" class="form-group">
                <span class="col-sm-1"></span>
                <div class="col-sm-2"><label class="control-label">Podaj imię:</label></div>
                <div class="col-sm-6"><input type="text" class="form-control" name="imie"></div>
                <span class="col-sm-3"></span>
            </div>
        </div>
        <div class="row">
            <div id="d-nazwisko" class="form-group">
                <span class="col-sm-1"></span>
                <div class="col-sm-2"><label class="control-label">Podaj nazwisko:</label></div>
                <div class="col-sm-6"><input type="text" class="form-control" name="nazwisko"></div>
                <span class="col-sm-3"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <button type="submit" class="btn btn-default">Zapisz</button>
            </div>
            <span class="col-sm-3"></span>
        </div>  
    </form>
</div>
<?php
    if($dodano)
    {
        echo "<div class=\"container\"><div class=\"row\"><div class=\"col-sm-12 \">Dodano ucznia o imieniu: ".$_POST['imie']." i nazwisku: ".$_POST['nazwisko']."</div></div></div>";
    }
?>
