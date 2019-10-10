<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laboratory work 1</title>
    </head>

    <body>
    <form action="Lab_1.php" method="post">
            
      <p>День: <input type = "text" maxlength=2 size="10" name ="day"></p>
            
      <p>Месяц: <select name="mounth">
               
                <option value="01">Январь</option>
                <option value="02">Февраль</option>
                <option value="03">Март</option>
                <option value="04">Апрель</option>
                <option value="05">Май</option>
                <option value="06">Июнь</option>
                <option value="07">Июль</option>
                <option value="08">Август</option>
                <option value="09">Сентябрь</option>
                <option value="10">Октябрь</option>
                <option value="11">Ноябрь</option>
                <option value="12">Декабрь</option>
                
                </select></p>
            
      <p>Год: &nbsp <input type = "text" maxlength=4 size="10" name="Year"></p>
            
      <p><input type="submit" value="Отправить" name = "button"></p>
      
    </form>
        
<?php
            
if(isset($_POST['button']))

   {
                                
if((is_numeric($_POST['day']) == true)
&& ($_POST['day'] > 0 && $_POST['day'] <= 31)
&& (is_numeric($_POST['Year']) == true)
&& ($_POST['Year'] > 0)  )
   
   {
        $day =  $_POST['day'];
        $year =  $_POST['Year'];
        $month= $_POST['mounth'];
               
if  ($day < 10)
    {$day = $day;}         
else
{$day = $day[0] + $day[1];}
   



if($year < 10)
  {$year=$year;} 
  
elseif($year < 100 && $year >=10)
  {$year=$year[0] + $year[1];}
  
elseif($year < 1000 && $year>=100)
  {$year=$year[0]+$year[1]+$year[2];}
  
else
  {$year=$year[0] + $year[1] + $year[2] + $year[3];}




$rezult = $day + $year + $month[0] + $month[1];
        
$rezult_2 = (string)$rezult;

        
        
        
if  ($rezult_2 < 10)
    {$rezult_2 = $rezult_2;}         
else
        
        {do
             {$rezult_2 = (string)($rezult_2[0] + $rezult_2[1]); }
                
        while($rezult_2 > 9); 
        }
             
                echo 'Ваш результат: '.$rezult_2.' - ';
                
                
                switch ($rezult_2)
                {
                    case 1:
                        echo 'Этот человек 100% лидер. Исключительно благодаря его трудолюбию и способности "быть в теме" ему достается то, что он хотел. Но все это только, потому что 1 сама прикладывает огромное количество усилий для этого. Удача, к сожалению, этого человека не очень любит и совсем не ждет.';
                        break;
                    case 2:
                        echo 'Представителя этого числа удача и везение поджидают буквально на каждом повороте. Стоит взяться за любое дело, как в кротчайшие сроки все буде успешно и никаких преград на пути не предвидется';
                        break;
                    case 3:
                        echo 'Вот, кого-кого, а 3 удача вообще покинула и возвращаться не планирует. Люди с таким числом удачи практически полностью ее лишены. Из-за этого они часто впадают в отчаяние, но очень скоро берут себя в руки и просто делают то, что нужно, совсем не надеясь на удачу и везение. Все, чего добиваются 3 - только благодаря способности встать и сделать, не откладывая на потом.';
                        break;
                    case 4:
                        echo 'Представители этого числа не слишком приманивают удачу. Она, конечно, присутствует в их судьбе и помогает, но на их пути встречается масса препятствий.';
                        break;
                    case 5:
                        echo 'Эти люди нуждаются в постоянных инструкциях к действию. А удача - дама привередливая и не будет никого инструктировать. Поэтому, все, что остается 5 - это "пахать без перерыва", ведь удача к ним совсем не благосклонна.';
                        break;
                    case 6:
                        echo 'Число хранит неимоверную удачу. В самых запущенных делах, в провальных проектах, на сложных экзаменах представители этого числа найдут выход.';
                        break;
                    case 7:
                        echo 'Число хранит неимоверную удачу. В самых запущенных делах, в провальных проектах, на сложных экзаменах представители этого числа найдут выход. ';
                        break;
                    case 8:
                        echo 'Это число способствует успехам в карьере, бизнесе - во всем, что имеет связь с финансами. Обычно такие люди на главное место ставят именно деньги, потому что их мышление таково: любовь или дружба – не главные потребности человека.';
                        break;
                    case 9:
                        echo 'Удача сопутствует представителям этого числа. Есть единственная мелочь, которую стоит выполнять: чтобы удача не отвернулась в самую неподходящую минуту - не надо восхвалять собственные успехи.';
                        break;
                }
    }
else
{   echo "Неверный ввод";   }
   
    }        
                
?>
        
    </body>

</html>