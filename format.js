function varifybutton(){
  // var passwordDoc = readTextFile("../Project/password.json");
  // passwordDoc = JSON.parse(passwordDoc);
  var varifytime = 0;
  var varifyinggg = window.setInterval(()=>{
    document.getElementById("page5-button").innerHTML ="Verify (" + varifytime + "s)";
    if (varifytime>0){varifytime = varifytime-1;document.getElementById("page5-password").innerHTML = "Please wait for the cool-down time"}
    else if (varifytime<=0){
      document.getElementById("page5-button").innerHTML ="Verify";
      document.getElementById("page5-button").addEventListener(
      "click",()=>{varifytime=5;
        if(document.getElementById("usernameInput").value == "thegeniusadmin" &&
        document.getElementById("passwordInput").value == "goodjob")
        {alert("It seems that you know how to read html and javascript!\nWell done!");
        clearInterval(varifyinggg);
      document.getElementById("usernameInput").value = "";
      document.getElementById("passwordInput").value = "";
      document.getElementById("page5-password").innerHTML = "You are the Genius Webpage Developer!"}
        else{document.getElementById("page5-password").innerHTML = "Invalid Username or Password";}
      })
    }
},1000);}
