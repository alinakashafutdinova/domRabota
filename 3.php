<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Кашафутдинова лаб 10</title>
</head>
<body>
    <main>
    	<style>
    		*{
    margin: 0;
    padding: 0;
}
body{
    justify-content: center;
    background-color: rgba(128, 128, 128, 0.226);
}

header{
    display: flex;
    width: 100%;
    height: 60px;
    background-color:rgba(89, 162, 185, 0.836);
    justify-content: right;
    
    
}
/* div{ */
/* display:inline-block;} */
a{
    color: white;
    text-decoration: none;
}

   .zagolovok{
   padding: 12px 30px 0px 0px;
   color: white;

}
.content{
    display: flex;
}
.zagolovok2{
    text-align: center;
    padding: 0px 0px 20px 0px;
}

.sidebar{
    width: 250px;
    height: 100vh;
    background-color: white;
}

ul{
padding: 20px ;
}

li{
    padding: 10px 0;
    list-style-type: none;
    text-align: center;
}

iframe{
    height: 100vh;
    width: 100%;
    border: none;
    margin: 0px 0px 0px 0px ;
    
}
footer{
    display: flex;
    height: 60px;
    background-color:rgba(89, 162, 185, 0.836);
   align-items: center;
   padding: 0px 0px 0px 15px;
    color: white;
}

.big{
    margin: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bl{
    align-items: center;
    width: 300px ;
    height: 230px;
    background-color:white ;
    border-radius: 16px;
    color:rgba(13, 149, 190, 0.856);
   text-align: center;
   box-shadow: 10px 5px 15px 0px rgba(0, 0, 0, 0.5); 
}

.zagolovok3{
    text-align: center;
     padding: 20px 0px 10px 0px; 
}

input{
    border: solid 1px gray;
    border-radius: 5px;
    width: 260px;
    height: 30px;
    text-align: justify;
    padding: 2px; 
    margin: 4px;
}
.knopka{
    
    text-align: center;
    color: white;
    width: 70px;
    height: 40px;
    background-color:rgba(13, 149, 190, 0.856);
    border-radius: 10px;
    margin: 20px 0px 20px 0px;
   border: none;
}
 .bigR{
    /* margin: 200px; */
    display: flex;
    align-items: center;
    justify-content: center;
	height: 100vh;
   
 }
 .blR{
    align-items: center;
    width: 300px ;
    height: 500px;
    background-color:white ;
    border-radius: 16px;
    color:rgba(13, 149, 190, 0.856);
   text-align: center;
   box-shadow: 10px 5px 15px 0px rgba(0, 0, 0, 0.5); 
   /* margin-top:-100px; */
   margin-left: 300px;
 }

 .knopkaR{
    
    text-align: center;
    color: white;
    width: 150px;
    height: 40px;
    background-color:rgba(13, 149, 190, 0.856);
    border-radius: 10px;
   margin: 10px 0px 20px 0px;
   border: none;
}
.zagolovok4{
    color: black;
	padding: 10px 0px 10px 0px;
}

.vibor{
    width: 16px;
	margin:0px 10px 3px 10px;
    
}
.pol{
    display: flex;
	justify-content:center;
	/* margin:0px 5px; */
}
label{
    padding: 6px 4px 10px 1px;
    margin: 0px 20px 0px 20px;
    text-align: center;
	color:black;

}
.data{
	 display:inline-flex; 
justify-content:center;	
/*  */
	}
#День {
	border-radius: 5px;
	padding:10px 20px 5px 5px;
	display:inline-block;
	margin:0px 5px;
}
#Месяц {
	border-radius: 5px;
	padding:10px 20px 5px 5px;
	display:inline-block;
	margin:0px 5px;
}
#Год {
	border-radius: 5px;
	padding:10px 20px 5px 5px;
	display:inline-block;
	margin:0px 5px;
}
    	</style>
        <header>
           
        </header>
        <div class="content">
            <div class="sidebar">
                <ul>
                    <h2 class="zag2">Боковое меню</h2>
                    <li>Пункт меню №1</a></li>
                    <li>Пункт меню №2</a></li>
                    <li>Пункт меню №3</a></li>
                    <li>Пункт меню №4</a></li>
                    <li>Пункт меню №5</a></li>
                    <li>Пункт меню №6</a></li>
                </ul>  
            </div>
         <!DOCTYPE html>

    <div class="bigR">
        <div class="blR">
            <h2 class="zagolovok3">Регистрация</h2>
            <form action="">
                 <input type="text" placeholder="    Имя">
            <input type="text" placeholder="    Фамилия">
            <input type="email" placeholder="    E-mail">
            <input type="password" placeholder="    Пароль">
            <input type="password" placeholder="    Подтверждение пароля">
            <h3 class="zagolovok4">Дата рождения</h3>
			
		<div class="data">
		
		
<div class="day" >
	<select id="День">
	<option value="" selected>День</option>
       <?php
	   $day =0;
		while ($day++<=30 )
		{ ?>
		<option value="<?=$day?>"><?=$day?></option>
		<?php }
		?>
		
		
	</select>
</div>

<div class="month">
	
	<select id="Месяц">
	<option value="" selected>Месяц</option>
	<?php
	$months=array("январь","февраль","март","апрель","май","июнь","июль","август","сентябрь","октябрь","ноябрь","декабрь");
		
		foreach ($months as $month)
		{
		 
		echo "<option value='$month'> $month </option>";}
		{?>
		<?php }
		?>
		
	</select>
</div>

<div class="god">
	
	<select id="Год">
	
	
<option value="" selected>Год</option>
<?php

for($days=1900; $days<2005; $days++)
echo "<option value= '$days'> $days </option>";

{ ?>    
			
<?php }
?>
</select>
	</div>
	
			 </div>
			
            <!-- <input type="date" placeholder="    Подтверждение пароля"> -->
			
            <h3 class="zagolovok4">Пол</h3>
            <div class="pol">
                <input type="radio" id="contactChoice1" name="contact" value="email" class="vibor">
                <label for="contactChoice1">Мужской</label>

                <input type="radio" id="contactChoice2" name="contact" value="phone" class="vibor">
                <label for="contactChoice2">Женский</label>
            </div>
            <input type="submit" action="" value="Зарегестрироваться" class="knopkaR">
            </form>
           
            
        </div>
    </div>
    
       
      




<?php
	
	//$mass=array("январь","февраль","март","апрель","май","июнь","июль","август","сентябрь","октябрь","ноябрь","декабрь");
		//for($i=0;$i<count($mass);$i++){
			//echo("{$mass[$i]}");
		//}
		?>
        </div>
        <footer>
            Выполнила студентка группы П-21 <br> Кашафутдинова А.Т.
       </footer>
    </main>  
</body>
</html>