
<?php 
   include_once 'dbh.php';
 ?>
<html>
  <head>
    <title>BookMe</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">

  </head>
  
  <body>
    <section id="focus">
      <div class="usluge" style="display: flex;" >  
      
      <div id="webapp_cover">
  <div id="menu_button">
    <input type="checkbox" id="menu_checkbox">
    <label for="menu_checkbox" id="menu_label">
      <div id="menu_text_bar" onclick="window.location.href = 'INDEX.html';"></div>
    </label>
  </div>  </div><input type="text" id="naziv" name="naziv" placeholder="Traži?" style="margin-left: 50px; width: 100%;border-radius: 15px 15px 0 0; font-size: 150%;"> </div> 

            <?php 
     
     $sql = "SELECT * FROM korisnici;";
      $result = mysqli_query($conn, $sql);
      $resultPR = mysqli_num_rows($result);

      $Rs = array('naziv_Slike' => "", 'imePrezime' => "", 'mjesto' => "", 'vjestina' => "");
      if($resultPR>0){
        while($row = mysqli_fetch_assoc($result)){
          $Rs["naziv_Slike"]=$row["naziv_Slike"];
          $Rs["imePrezime"]=$row["imePrezime"];
          $Rs["mjesto"]=$row["mjesto"];
          $Rs["vjestina"]=$row["vjestina"];
          $adr="window.location.href = 'profilna.html';";
          echo "<div class='usluge' onclick='goto();'>
            <div class='usluga'>
            <div class='icon'><img src='slike/icon.png' width='100%'></div>
            <div class='info'>
              <div class='naziv'>".$Rs["imePrezime"]."<span style='float: right;'>⭐⭐⭐⭐</span></div>
              <div class='lokacija'><i class='fa fa-map-marker' aria-hidden='true'></i>".$Rs["mjesto"]."</div>
              <div class='vjestine'>".str_replace('/', ", ",  $Rs["vjestina"])."</div>
            </div>
          </div></div>";
        }
      }
  
     ?>
<script type="text/javascript">function goto(){window.location.href = 'profilna.html';}</script>

    </section>
  </body>
</html>
<style type="text/css">
	::-webkit-scrollbar{
    width: 0px;
}
.icon{
  margin-top: auto;
  margin-bottom: auto;
  width: 10%;
  height: 10%;
}
 #naziv{
  padding: 25px 10px 0 10px;
  border:0px;
  border-bottom: 10px solid black;
  background-color: #FBEEE6;
  text-align: left;
  color: #D05E5E;
  text-decoration: none;
  font-size: 30px;
  font-weight: 500;
  font-family: sans-serif;}
  
#naziv:hover{
  box-shadow: 2px 0px 20px rgba(145, 144, 145,70%);
}
section:hover{overflow-y: scroll;}
.usluge {padding:15px;}h2{font-size: 1.5rem;
		text-align: left;
	 	font-weight: 500;
	 	color: #3E3049;

	 	}
.usluga{
		display: flex;
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 2px 0px 20px #919091;
    transition: box-shadow 0.4s ease-out;
}
.usluga:hover{box-shadow: 2px 0px 20px #d75c8c; cursor: pointer;}
.info{margin-left:20px;
		text-align: left;
  width: 100%;}
.naziv{
			font-weight: bold;	
	}
	.lokacija{
			color:#665E77;


		}
		.vjestine{
			color:#7358D4;
		}

	section{
  height:97%;
  width:97%;
  border:1px solid #ccc;
  border-radius:20px;
  overflow-y:hidden;padding:10px;
  background-color: #76D7C4;  
  font-family: Arial;
  text-align: center;
  font-size: 220%;
}

body{
  display:flex;
  justify-content: center;
  align-items: center;
  background-color:#D0ECE7;
}
body:hover{outline: none; overflow-y: scroll;}
<!--animacija za ikonu-->
*
{
    -webkit-tap-highlight-color: transparent;
}

*:focus
{
    outline: none;
}

#webapp_cover
{
  
    width: 49px;
    margin-top: 70px;
    margin-left: 20px; 
    transform: translateY(-50%) scale(2);
}

#menu_button
{
    width: 49px;
    overflow: hidden;
}

#menu_checkbox
{
    display: none;
}

#menu_label
{

    position: relative;
    display: block;
    height: 29px;
    cursor: pointer;
}

#menu_label:before, #menu_label:after, #menu_text_bar
{

    position: absolute;
    left: 0;
    width: 100%;
    height: 5px;
    background-color: black;
}

#menu_label:before, #menu_label:after
{
    content: '';
    transition: 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55) left;
}

#menu_label:before
{
    top: 0;
}

#menu_label:after
{
    top: 12px;
}

#menu_text_bar
{
    top: 24px;
}

#menu_text_bar:before
{
    content: 'MENU';
    position: absolute;
    top: 5px;
    right: 0;
    left: 0;
    color: #fff;
    font-size: 17px;
    font-weight: bold;
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
    text-align: center;
}

#menu_checkbox:hover + #menu_label:before
{
    left: -49px;
}

#menu_checkbox:hover + #menu_label:after
{
    left: 49px;
}

#menu_checkbox:hover + #menu_label #menu_text_bar:before
{
    animation: moveUpThenDown 0.8s ease 0.2s forwards, shakeWhileMovingUp 0.8s ease 0.2s forwards, shakeWhileMovingDown 0.2s ease 0.8s forwards;
}

@keyframes moveUpThenDown
{
    0%{ top:0; }
    50%{ top:-27px;}
    100%{ top:-14px; }
}

@keyframes shakeWhileMovingUp
{
    0%{ transform: rotateZ(0); }
    25%{ transform:rotateZ(-10deg); }
    50%{ transform:rotateZ(0deg); }
    75%{ transform:rotateZ(10deg); }
    100%{ transform:rotateZ(0); }
}

@keyframes shakeWhileMovingDown
{
    0%{ transform:rotateZ(0); }
    80%{ transform:rotateZ(3deg); }
    90%{ transform:rotateZ(-3deg); }
    100%{ transform:rotateZ(0); }
}


</style><script type="text/javascript">
    
  </script>