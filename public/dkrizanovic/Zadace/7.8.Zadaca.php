<?php

echo '7.8. Zadaca za ponavljanje';
echo '<br>';
echo '<br>';
echo '1.Napišite funkciju koja vraća hrvatski naziv za trenutačni mjesec. Parametar koji prosljeđujete funkciji je rezultat funkcije date(n)';
echo '<br>';
echo '<br>';
echo 'Rješenje:';
echo '<br>';
//Zadatak 1
function hr_mjesec()
{
    switch(date('n')):
        case '1':
            $mjesec = 'Siječanj';
            break;
         case '2':
            $mjesec = 'Veljača';
            break;
         case '3':
            $mjesec = 'Ožujak';
            break;
         case '4':
            $mjesec = 'Travanj';
            break;
         case '5':
            $mjesec = 'Svibanj';
            break;
         case '6':
            $mjesec = 'Lipanj';
             break;
              case '7':                  
            $mjesec = 'Srpanj';
                     break;
                  case '8':
            $mjesec = 'Kolovoz';
            break;
         case '9':
            $mjesec = 'Rujan';
            break;
         case '10':
            $mjesec = 'Listopad';
            break;
         case '11':
            $mjesec = 'Studeni';
            break;
         case '12':
            $mjesec = 'Prosinac';
            break;
    endswitch;
    echo "<br> Trenutačni mjesec je : $mjesec";
}
hr_mjesec();
