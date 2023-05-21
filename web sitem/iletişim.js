var ad=document.getElementById("ad");
var soyad=document.getElementById("soyad");
var email=document.getElementById("_mail");
var telno=document.getElementById("telno");

function controller(form) {

    if(ad == "" || soyad == "" || email == "" || telno == ""){
        alert("boşlukları doldurunuz!");
        return false;
    }
    return true;
}   