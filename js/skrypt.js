function sprawdz_obec()
{
    var tyg = new Array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    var kto = document.forms['d-obec']['uczen'].value;
    var dni = document.forms['d-obec']['dzien'].value;
    var mies = document.forms['d-obec']['miesiac'].value;
    var rok = document.forms['d-obec']['rok'].value;
    var blad = 0;

    if(kto==0)
    {
        document.getElementById('d-uczen').className += " " + "has-error";
        blad++;
    } 
    else document.getElementById('d-uczen').className = "form-group has-success";
    if(dni==0)
    {
        document.getElementById('d-dzien').className += " " + "has-error";
        blad++;
    }
    if(mies==0)
    {
        document.getElementById('d-mies').className += " " + "has-error";
        blad++;
    } 
    else document.getElementById('d-mies').className = "form-group has-success";
    if(rok==0)
    {
        document.getElementById('d-rok').className += " " + "has-error";
        blad++;
    } 
    else document.getElementById('d-rok').className = "form-group has-success";
    if(dni!=0)
    {
        if(dni>tyg[mies]) 
        {
            document.getElementById('d-dzien').className += " " + "has-error";
            blad++;
        } 
        else document.getElementById('d-dzien').className = "form-group has-success";
    }
        
    if(blad==0) return true;
    else return false;
}
    
function sprawdz_ucznia()
{
    var imie = document.forms['d-uczen']['imie'].value;
    var nazwisko = document.forms['d-uczen']['nazwisko'].value;
    var blad = 0;

    if(imie=='')
    {
        document.getElementById('d-imie').className += " " + "has-error";
        blad++;
    }
    else document.getElementById('d-imie').className = "form-group has-success";

    if(nazwisko=='')
    {
        document.getElementById('d-nazwisko').className += " " + "has-error";
        blad++;
    }
    else document.getElementById('d-nazwisko').className = "form-group has-success";

    if(blad==0) return true;
    else return false;
}
  