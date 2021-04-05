<?php 
   include_once 'dbh.php';
 ?>
<!doctype html>
<html>
  <head>
    <title>BookMe</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
  </head>
  <body>
    <?php 
     
     $sql = "SELECT * FROM korisnici WHERE imePrezime='amer mujalo';";
      $result = mysqli_query($conn, $sql);
      $resultPR = mysqli_num_rows($result);

      $Rs = array('naziv_Slike' => "", 'imePrezime' => "", 'mjesto' => "", 'email' => "", 'mobitel' => "", 'Omeni' => "", 'instagram' => "", 'facebook' => "", 'linkedin' => "", 'vjestina' => "");
      if($resultPR>0){
        while($row = mysqli_fetch_assoc($result)){
          $Rs["naziv_Slike"]=$row["naziv_Slike"];
          $Rs["imePrezime"]=$row["imePrezime"];
          $Rs["mjesto"]=$row["mjesto"];
          $Rs["email"]=$row["email"];
          $Rs["mobitel"]=$row["mobitel"];
          $Rs["Omeni"]=$row["Omeni"];
          $Rs["instagram"]=$row["instagram"];
          $Rs["facebook"]=$row["facebook"];
          $Rs["linkedin"]=$row["linkedin"];
          $Rs["vjestina"]=$row["vjestina"];
        }
      }
  
     ?>
    <section>
      <div class="nav-icon" onclick="window.location.href = 'INDEX.html';">
    <div></div>
        </div>
        <header align="center"><img src="profil_slike/<?php echo $Rs['naziv_Slike'];?>" alt="logo" width="70%" height="70%">
      </header>

    		<main>
          <div class="info">
            <h1 style=""><?php echo $Rs['imePrezime'];?></h1>
            <p style="color:#665E77;"><i class="fa fa-map-marker" aria-hidden="true" style="color:#8E44AD;"></i>&#8194;<?php echo $Rs['mjesto'];?></p>
            <p><i class="fa fa-envelope" aria-hidden="true" style="color:#8E44AD;"></i>&#8194;<u style="text-decoration-color: #8E44AD;"><?php echo $Rs['email'];?></u></p>
            <p><i class="fa fa-phone" aria-hidden="true" style="color:#8E44AD;"></i>&#8194;<?php echo $Rs['mobitel'];?></p>
            <hr>
            <p><i class="fa fa-info-circle" aria-hidden="true" style="color:#8E44AD;"></i>&#8194;<b>O meni:</b></p>
            <p><?php echo $Rs['Omeni'];?><br>
            <a href="https://www.instagram.com/<?php echo $Rs['instagram'];?>/" class="link" ><i class="fa fa-instagram" style="font-size: 150%;"></i></a>&#8195;
        <a href="https://www.facebook.com/<?php echo $Rs['facebook'];?>/" class="link" ><i class="fa fa-facebook-square" style="font-size: 150%;"></i></a>&#8195;
        <a href="https://www.linkedin.com/<?php echo $Rs['facebook'];?>/" class="link"><i class=" fa fa-linkedin-square" style="font-size: 150%;"></i></a></p>
            <hr>
            <p><i class="fa fa-star" aria-hidden="true" style="color:#8E44AD;"></i>&#8194;<b>Vještine:</b></p>
            <div class="vjestine">
              <div class="vjestina"><?php echo $Rs['vjestina'];?></div>


            </div>
            <p style="color:#8E44AD;">⭐⭐⭐⭐⭐</p>
        <a href="#" class="navbar_link" onclick="alert('radnja u toku')">zaposli</a>
          </div>
        </main>

    </section>
  </body>
</html>
<style type="text/css">

    main{
background-color: #FBEEE6;
  border-radius: 30px;
  min-height: 1000px;
  padding-top: 10px;
  font-family: sans-serif;
  text-align: center;
  scroll-behavior: smooth;
  padding-bottom: 100px;
}

  header{
  padding:30px;
  height: 40%;
  width: 40%;
  margin-right: auto;
  margin-left: auto; 
}
  .nav-icon {
  margin: 1em;
  width: 10%;
  cursor: pointer;
}

.nav-icon:after, 
.nav-icon:before, 
.nav-icon div {
  background-color: #fff;
  border-radius: 5px;
  content: '';
  display: block;
  height: 10px;
  margin: 20px 0;
  transition: all .2s ease-in-out;
}
.nav-icon:hover:before {
  transform: translateY(30px) rotate(135deg);
}

.nav-icon:hover:after {
  transform: translateY(-30px) rotate(-135deg);
}

.nav-icon:hover div {
  transform: scale(0);
}
  .navbar_link{
    margin-bottom:10px;
  padding: 10px;
  border:4px solid #76D7C4;
  background-color: #FBEEE6;
  width: 70%;
  text-align: center;
  border-radius: 15px;
  color: #8E44AD;
  text-decoration: none;
  font-size: 150%;
  font-weight: 500;
  font-family: sans-serif;
  transition: background-color 1s ease-out;
}
.navbar_link:hover{
  background-color: #76D7C4;
}
  .vjestine{
    display: flex;
    align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  }
  .vjestina{
    margin:10px;
    color: #8E44AD;
    box-shadow: 0 0 5px #8E44AD;
    border: 1px solid #515A5A;
 
    padding: 4px;
    border-radius: 10px;
  }
  .info{
    width: 60%;
    height: 100%;
    margin-left: auto;
    margin-right: auto;

    font-size: 150%;
  }
	 ::-webkit-scrollbar{
    width: 0px;
}
header img{
border-radius: 50%;
background: #FBEEE6;
padding: 5px;   box-shadow: 0 0 7px #8E44AD; 
}

	body{
  margin:30px 0px;

  display:flex;
  justify-content: center;
  align-items: center;
  background-color:#D0ECE7;

}
  section{
  height:90%;
  width:95%;
  border:1px solid #ccc;
  border-radius:20px;
  background-color: #76D7C4;
  overflow-y:hidden;padding:10px;
  font-size: 150%;
  scroll-behavior: smooth;

}
	section:hover{overflow-y: scroll;}
</style>