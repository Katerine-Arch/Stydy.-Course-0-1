<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SoftWalls - Мягкие панели </title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        
            
            
            var answer = parseInt(Math.random() * 100); // переменная, которая генерирует случайное число
            var tryCount = 0;
            var maxTryCount = 5;
            
           /*считываетель числа из текстового поля*/
            function readInt(){
                var number = document.getElementById("userAnswer").value;
                /*конвертируем в целое число*/
                return parseInt(number);
                //все эти две строчки можно записать (с помощью + конвертируем целове число:  return + document.getElementById("userAnswer").value;
            }
            
        /*По запросу меняет текст Угадай число на верно/не верно - больше/меньше*/
            function write(text){
                document.getElementById("info").innerHTML = text;
                //innerHTML = text - кладет в стврочку нужный текст
            }
                            /*скрывает любой элемент страницы - сейчас надо скрывать, если игра окончена кнопку начать и поле ввода*/
                            function hide(id){
                                document.getElementById(id).style.display = "none";
                            }
        
                            function guess(){
                                tryCount++;
                                var userAnswer = readInt();
                                if(userAnswer == answer){
                                    write("<b>Поздравляю, вы угадали!</b>");
                                    hide("button");
                                    hide("userAnswer");
                                } else if(tryCount >= maxTryCount){
                                    write("Все попытки кончились:( Вы проиграли. <br> Правильный ответ " + answer);
                                    hide("button");
                                    hide("userAnswer");
                                }
                                else if(userAnswer > answer){
                                        write("Загаданное число меньше.<br> Попробуйте еще раз. Введите число от 0 до 100.");
                                } else if(userAnswer < answer){
                                        write("Загаданное число больше.<br> Попробуйте еще раз. Введите число от 0 до 100.");
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
                    <h1>Игра: угадайка.</h1>
                    
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