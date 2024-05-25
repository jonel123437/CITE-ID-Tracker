var login = document.getElementById('login')
var greetings = document.getElementById('greetings')

document.getElementById('loginPage').addEventListener('click', function() {
    login.style.display = "block"
    var xhttp = new XMLHttpRequest();
    event.preventDefault(); 
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            login.innerHTML = xhttp.responseText;
            greetings.style.display = "none";
        }
    };
    xhttp.open("GET", "./View/login.html", true);
    xhttp.send();
})

document.getElementById('signupPage').addEventListener('click', function() {
    login.style.display = "block"
    var xhttp = new XMLHttpRequest();
    event.preventDefault(); 
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            login.innerHTML = xhttp.responseText;
            greetings.style.display = "none";
        }
    };
    xhttp.open("GET", "./View/register.php", true);
    xhttp.send();
})

document.getElementById('title').addEventListener('click', function() {
    login.style.display = "none";
    greetings.style.display = "block"
})