function login()
{
    var username = document.getElementById("email").value;
    var password = document.getElementById("pwd").value;

    if(username == '')
    {
        alert("Enter your username:  ");
    }
    else if(password == ' ')
    {
        alert(" Enter Password");
    }
    else if(password.length < 3)
    {
        alert("password must be more than 3 charac.");
    }
    else if (username == 'san' && password == 'san123')
    {
        alert("Thankyou, you are logged in.");
    }
    else{
        alert("login unsuccessful");
    }
}
