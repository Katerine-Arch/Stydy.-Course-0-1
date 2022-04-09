<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SoftWalls - Мягкие панели </title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        
            
       function guess(){
           
            var answer = parseInt(Math.random() * 100); 
            var playerNumber=1;
           while (true) {
                var userAnswer = prompt('Какое число загадал компьютер?\nВведите q, если хотите выйти.\nИграет '+playerNumber+'-й игрок.');
                    if (userAnswer=='q') {
                    break;
                }
                   userAnswer= +userAnswer;
                    if (userAnswer==answer) {
                      alert('Ура! Вы угадали');
                      break;
                    }else if (userAnswer<answer) {
                      alert('Загаданное число меньше.\ Попробуйте еще раз. Введите число от 0 до 100.');
                    }else if (userAnswer>answer) {
                      alert('Загаданное число больше.\ Попробуйте еще раз. Введите число от 0 до 100.');
                    }
                    if (playerNumber==1) {
                        playerNumber=2;
                    }  else {
                        playerNumber=1;
                    }
            }
        }
               
    </script>    
</head>
    
    <body>
    <div class="content">

            <?php
            include "menu.php";      
            ?>
        
        <div class-"contentWrap">
            
                <div class="center">
                    <h1>Игра: угадайка - мультиплеер.</h1>
                    
                        <div class="box">
                            
                            <p id="info">Угадайте число от 0 до 100 ;)</p>
                            <input type="text" id="userAnswer">
                            <br>
                            <a href="#" onClick="guess();" id="button">Начать</a>
                            
                            
                            
                        </div>
                    
                    
                    
                </div>
            </div>
        </div>
  
    </body>
    
</html>    