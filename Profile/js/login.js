
    const loginberhasil = document.querySelector('.loginberhasil p');
    function validasi() {
    let Email = document.forms["form_login"]["Email"].value;
    if (Email == "") {
        alert("Email tidak boleh kosong!");
              return false;
        }
    let Password = document.forms["form_login"]["Password"].value;
    if (Password == ""){
        alert("Password tidak boleh kosong!");
              return false;
        }
    if (Email == "ticho@gmail.com" && Password == "ticho1215"){
        alert("Login successfully");
        window.location = "profilebaru.html";
        return false;
        } else {
            alert("Email / Password Salah!")
        }
    }
