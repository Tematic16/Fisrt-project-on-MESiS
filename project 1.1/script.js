function reminder(){
    alert("Ошибка соединения! Проверьте подключение к интернету!");
    //window.close();
}
//setTimeout(reminder,3000);
function valid(){
    var name = document.getElementById("name").value;
    console.log(name);
    var login = document.getElementById("login").value;
    console.log(login);
    var password = document.getElementById("password").value;
    console.log(password);
    var pochta = document.getElementById("pochta").value;
    console.log(pochta);
    
    var reg_name = /^[a-zа-яё]+$/i;
    if (reg_name.test(name) == false){
        alert("Ошибка в поле ввода имени!")
    }
    var reg_log = /^[a-zа-яё0-9]+$/i;
    if (reg_log.test(login) == false){
        alert("Ошибка в поле ввода имени пользователя!")
    }
    var reg_pass = /^[0-9]{8,100}/i;
    if (reg_pass.test(password) == false){
        alert("Ошибка в поле ввода пароля!")
    }
    var reg_pocht = /^[a-zа-яё0-9@.#%&*!]+$/i;
    if (reg_pocht.test(pochta) == false){
        alert("Ошибка в поле ввода почты!")
    }
}
document.querySelector(".button").addEventListener("click",valid);
