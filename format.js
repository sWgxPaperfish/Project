function varifybutton(){
  function readTextFile(file, callback) {
      var rawFile = new XMLHttpRequest();
      rawFile.overrideMimeType("application/json");
      rawFile.open("GET", file, true);
      rawFile.onreadystatechange = function() {
          if (rawFile.readyState === 4 && rawFile.status == "200") {
              callback(rawFile.responseText);
          }
      }
      rawFile.send(null);
  }

  //usage:

  readTextFile("../Project/password.json", function(text){
      var data = JSON.parse(text);
      // console.log(data);
  });
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
        if(document.getElementById("usernameInput").value == data.usernameee &&
        document.getElementById("passwordInput").value == data.passworddd )
        {alert("It seems that you know how to read html and javascript!\nWell done!");
        clearInterval(varifyinggg);
      document.getElementById("usernameInput").value = "";
      document.getElementById("passwordInput").value = "";
      document.getElementById("page5-password").innerHTML = "You are the Genius Webpage Developer!"}
        else{document.getElementById("page5-password").innerHTML = "Invalid Username or Password";}
      })
    }
},1000);}
