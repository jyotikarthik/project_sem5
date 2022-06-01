<!--Connecting to db-->
<?php
 $delete = false;
 $servername= "localhost";
 $username="root";
 $password= "";
 $db="notesapp";

 $conn= mysqli_connect($servername,$username,$password,$db);
 if(!$conn){
     die('Can\'t use'. $db . ':'. mysql_error());
 }else{
     echo "Connected ";
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Signup</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style1.css" rel="stylesheet">
    <!--Fonts-->
    <!--nav-links fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
 </head>
 <body>
 <form class="modal-content" action="/form.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <span for="name"><b>Name 😎</b></span>
      <input type="text" placeholder="Enter your first name" id="name" name="name" maxlength="25" minlength="2" required>

      <label for="sname"><b>Surname 🐼</b></label>
      <input type="text" placeholder="Enter your last name" id="surname" name="surname" maxlength="25" minlength="2" required>

      <label for="dob"><b>Date Of Birth 🐣:</b></label>
      <input type="date" placeholder="Enter Date of birth" id="dob" name="dob" required><br><br>

      <label for="uname"><b>Username 👨‍💻</b></label>
      <input type="text" placeholder="Enter your Username" id="username" name="username" minlength="2" maxlength="25" required>

      <label for="email"><b>Email 📧</b></label>
      <input type="email" placeholder="Enter your Email" id="email" name="email" maxlength="100" required>

      <label for="phone"><b>Phone 📞</b></label>
      <input type="phone" placeholder="Enter your phone number" id="phone" maxlength="10" name="phone" required><br><br>

      <label for="psw"><b>Password 🔑</b></label>
      <input type="password" placeholder="Enter your Password" id="pass" name="pass" size="100" required>

      <label for="psw-repeat"><b>Repeat Password 💬</b></label>
      <input type="password" placeholder="Repeat Password" id="psw-repeat" name="psw-repeat" size="100" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label><hr>

      <h1>Additional details.</h1>
      <p>Please fill in the following details for a better user experience.</p>
      <hr>

      <label for="pic"><b>Profile Photo:</b></label>
      <input id="pic" type="file" name="pic" placeholder="Photo" capture><br><br>

      <label for="bio"><b>Describe Yourself...</b></label>
      <textarea class="form-control" placeholder="Write about yourself✨" id="bio" name="bio" ></textarea>

      <label for="location"><b>Where are you From?</b></label>
              <select id="loc" name="loc">
                <option value="australia">India</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
                <option value="Russia">Russia</option>
                <option value="Japan">Japan</option>
                <option value="Dubai">Dubai</option>
                <option value="Antartica">Antartica</option>
              </select>

      <label for="location"><b>Select your Interests.</b></label>
      <p>Hold down the Ctrl (windows) or Command (Mac) button to select multiple options. You can select upto 3 hobbies.</p>
              <select multiple id="hob" name="hob">
                <option value="Acting">Acting</option>
                <option value="Animation">Animation</option>
                <option value="Art">Art</option>
                <option value="Astrology">Astrology</option>
                <option value="Babysitting">Babysitting</option>
                <option value="Beatboxing">Beatboxing</option>
                <option value="Binge">Binge watching</option>
                <option value="Blogging">Blogging</option>
                <option value="Bowling">Bowling</option>
                <option value="Calligraphy">Calligraphy</option>
                <option value="Car">Car Building or Fixing</option>
                <option value="Computer">Computer Programming</option>
                <option value="Cooking">Cooking</option>
                <option value="Cosplaying">Cosplaying</option>
                <option value="Crafting">Crafting</option>
                <option value="Dance">Dance</option>
                <option value="Digital">Digital Art</option>
                <option value="Diving">Diving</option>
                <option value="DIY">DIY</option>
                <option value="Embroidery">Embroidery</option>
                <option value="Gaming">Gaming</option>
                <option value="Gardening">Gardening</option>
                <option value="Graphic">Graphic designing</option>
                <option value="Hair">Hair styling</option>
                <option value="Karate">Karate</option>
                <option value="Kung">Kung fu</option>
                <option value="Livestreaming">Livestreaming</option>
                <option value="Miniature">Miniature art</option>
                <option value="Painting">Painting</option>
                <option value="Photography">Photography</option>
                <option value="Poetry">Poetry</option>
                <option value="Rapping">Rapping</option>
                <option value="Reading">Reading</option>
                <option value="Sculpting">Sculpting</option>
                <option value="Sewing">Sewing</option>
                <option value="Singing">Singing</option>
                <option value="story">Story telling</option>
                <option value="Thrifting">Thrifting</option>
                <option value="Videography">Videography</option>
                <option value="Writing">Writing</option>
                <option value="Yoga">Yoga</option>
                <option value="Zumba">Zumba</option>
                <option value="Modeling">Modeling</option>
                <option value="Talking">Talking</option>
                <option value="Pottery">Pottery</option>
                <option value="Puppetry">Puppetry</option>
                <option value="Marvel">Comics</option>
                <option value="Manga">Manga</option>
                <option value="Movies">Movies</option>
                <option value="Comedy">Comedy</option>
                <option value="Fashion">Fashion</option>
                <option value="Tattoo">Tattoo</option>
                <option value="Business">Business</option>
                <option value="Crptocurrency">Crptocurrency</option>
                <option value="Stock">Stock market</option>
                <option value="Economy">Economy</option>
                <option value="Science">Science</option>
                <option value="History">History</option>
                <option value="Technology">Technology</option>
                <option value="Health">Health and fitness</option>
                <option value="Music">Music</option>
                <option value="Travel">Travel</option>
                <option value="Sports">Sports</option>
                <option value="Anime">Anime</option>
                <option value="Vehicles">Vehicles</option>
                <option value="Communication">Communication</option>
                <option value="Drama">Drama</option>
                <option value="Origami">Origami</option>
                <option value="Languages">Languages</option>
                <option value="Politics">Politics</option>
                <option value="Magic">Magic</option>
                <option value="Makeup">Makeup</option>
              </select> 
              
              <label for="intadd"><b>If your interest field is not available in dropdown lists above write it here.</b></label>
              <input type="text" placeholder="Enter your interest which is not included in above list" id="intadd" name="intadd">      

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button> 
        <button type="button" class="cancelbtn">Cancel</button>
      </div>
      <div class="log">
        <a href="login.php">Already have an account? &nbsp; Login Directly! </a>
      </div>
    </div>
  </form>
 </body>
 </html>