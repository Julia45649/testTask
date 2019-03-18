document.getElementById('sub').disabled=true;
function validate(){
    document.getElementById('sub').disabled=true;
    var username = document.getElementById("userName").value;
    var password = document.getElementById("password").value;
    if ( username !== "" && password !== ""){
        document.getElementById("userName").style.borderColor = '#0c9f76';
        document.getElementById("password").style.borderColor = '#0c9f76';
        document.getElementById('sub').disabled=false;
        document.getElementById('wrong').style.display= 'none';
    }
    else{
        document.getElementById('sub').disabled=true;
        document.getElementById("userName").style.borderColor = '#ed1c24';
        document.getElementById("password").style.borderColor = '#ed1c24';
        document.getElementById('wrong').innerHTML = "Please fill in all fields"
    }
}
function postAjax() {
    var username = document.getElementById("userName").value;
    var password = document.getElementById("password").value;
    axios.post('/auth/login', {
        headers: {
            'Accept': 'application/json',
            "Access-Control-Allow-Origin": "*",
        },
        data:{
            username: username,
            password: password,
        }
    })
        .then(function (response) {
            console.log('SENT');
            console.log(response);
            alert('SENT');

            window.location.replace("https://hotels24.ua/");
        })
        .catch(function (error) {
            if (error.response.status === 400) alert("Incorrect login or password");
            if (error.response.status === 500) alert("Something went wrong. Please try again");
            console.log(error);
        });
}