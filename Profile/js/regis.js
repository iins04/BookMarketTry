
    const loginberhasil = document.querySelector('.loginberhasil p');
    
    function regis() {
    let Email = document.forms["form_regis"]["Email"].value;
    if (Email == "") {
        alert("Email tidak boleh kosong!");
              return false;
        }
    let Password = document.forms["form_regis"]["Password"].value;
    if (Password == ""){
        alert("Password tidak boleh kosong!");
              return false;
        }
    let PasswordConfirm = document.forms["form_regis"]["PasswordConfirm"].value;
    if (PasswordConfirm == ""){
        alert("Password Konfirmasi tidak boleh kosong!");
        return false;
    }
    if (PasswordConfirm != Password){
        alert("Password tidak sama!");
        return false;
    }
    if (Email != "" && Password!="" && PasswordConfirm !=""){
        alert("Register successfully");
        window.location = "login1.html";
        return false;
        } else {
        }
    }