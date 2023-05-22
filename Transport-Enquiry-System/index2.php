

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xplainerr Copy</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script> 
</head>
<body>

    <div class="wrapper">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
</div>

    <div class="top-bar">
        
    </div>
    <div class="nav">
        <div class="nav-ele">
            <div class="nav-heading">
                Bus Transport System
            </div>
            
            <div class="nav-side">
                <ul>
                    <li><a href="About.html">About</a></li>
                    <li><a href="About.html">Contact Us</a></li>
                    <li><a href="About.html">Home</a></li>
                </ul>
                
            </div>
            
            
        </div>
    </div>
    <div>
    <div class="main">
        <div class="form-area">
          <form class="form-place" id="myform" method="POST" >
            <div>
                <label>From</label>
                <input type="text" name="source" id="source">
            </div>
            <div>
                <label>To</label>
                <input type="text" name="destination" id="destination">
            </div>
            <div>
            <button type="submit" name="submit" id="btn"><img src="search.png" alt="Submit" ></button>
            </div>
        </form>
         
        </div>
        <div >
            <img src="bus-01.png" alt="Bus Image" height="500px">
        </div>
        
    </div>


    <script>

        if (annyang) {
          // Let's define our first command. First the text we expect, and then the function it should call
          var commands = {
            
            'change color': function() {
              let root=document.documentElement;
              root.style.setProperty('--lightpink','#dd58c3');
              root.style.setProperty('--yellow','#ffc530');
              root.style.setProperty('--alice','aliceblue');
              root.style.setProperty('--darkblue','#06051f');
              root.style.setProperty('--cyan','cyan');
              root.style.setProperty('--darkpink','#ff4293');
              root.style.setProperty('--deepskyblue','deepskyblue');
            },

            'from *tag': function(variable){
              let source = document.getElementById("source");
              source.value = variable;
            },
            'to *tag': function(variable){
              let destination = document.getElementById("destination");
              destination.value = variable;
            }
          };
          
          // Add our commands to annyang
          annyang.addCommands(commands);
        
          // Start listening. You can call this here, or attach this call to an event, button, etc.
          annyang.start();
        }
      
      </script>

       
</body>


<!-- let html='';
              html+='<p>This is your information</p>';
              formarea.innerHTML=html; -->
</html>




  <?php
  if (isset($_POST['submit'])) {
    include 'form_data.php';
    
  }
  ?>
