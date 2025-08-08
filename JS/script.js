function contactFormStepByStep() {


    var reason = prompt("Why are you contacting? (Project / Thesis / Meet & Greet)");

    if (!reason) {
        alert("Didn't enter anything.");
        return;



    } else if (
        reason.toLowerCase() === "project" ||
        reason.toLowerCase() === "thesis" ||
        reason.toLowerCase() === "meet & greet"
    ) {
        alert("You chose: " + reason);


    }
    else {
        alert("Invalid input.");
        return;
    }





    var appInput = prompt("Are you interested in App Development? (yes / no)");
    var app = appInput && appInput.toLowerCase() === "yes";
    alert("App Development Interest: " + (app ? "Yes" : "No"));


    var webInput = prompt("Are you interested in Web Development? (yes / no)");
    var web = webInput && webInput.toLowerCase() === "yes";
    alert("Web Development Interest: " + (web ? "Yes" : "No"));






    var jobInput = prompt("Are you offering a job? (yes / no)");
    var job = jobInput && jobInput.toLowerCase() === "yes";
    alert("Offering a Job: " + (job ? "Yes" : "No"));



    var services = "";
    if (app && web) {
        services = "App Development, Web Development";
    } else if (app) {
        services = "App Development";
    } else if (web) {
        services = "Web Development";
    } else {
        services = "None";
    }


    alert(
        "Summary\n" +
        "Reason: " + reason + "\n" +
        "Services: " + services + "\n" +
        "Offering a Job: " + (job ? "Yes" : "No")
    );
}

contactFormStepByStep();
