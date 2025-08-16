var database = [
    {
        userName: "rifat",
        password: "0",
    }
];

var uName = prompt("Enter your user name");
var pass = prompt("Enter your password");



function signIn(uName, pass) {
    if (uName == database[0].userName && pass == database[0].password) {
        var para = new URLSearchParams(window.location.search);
        var fname = para.get("firstname");
        var lname = para.get("lastname");
        var email = para.get("email");
        var reason = para.get("contact_reason");
        var service = para.getAll("service");
        var hire = para.get("job_offer");
        var position = para.get("position");
        var comment = para.get("comment");


        console.log(fname);
        console.log(lname);
        console.log(email);
        console.log(reason);
        console.log(service.join(", "));
        console.log(hire);
        console.log(position);
        console.log(comment);
    }
    else {
        console.log("Incorrect Username or Password");
    }
}
signIn(uName, pass);