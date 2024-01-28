<?php
// // Пользовательская функция-обработчик
// function myErrorHandler($errno, $msg, $file, $line)
// {
//     echo "Произошла ошибка с кодом $errno\n";
//     echo "Файл: $file, строка $line.\n";
//     echo "Текст ошибки: $msg";
// }
// // Регистрация пользовательской функции-обработчика
// set_error_handler("myErrorHandler", E_ALL);
// // Вызываем функцию для несуществующего файла, чтобы
// // сгенерировать предупреждение, которое будет перехвачено,
// filemtime("spoon");

//Пользовательская функция-обработчик
// function myErrorHandler($errno, $errstr, $errfile, $errline) {
//     // echo "Пользовательская ошибка с кодом $errno: $errstr\n";
//     // echo "Ошибка в строке $errline в $errfile\n";
//     error_log("Hello, errors!"." E_USER_ERROR $errno: $errstr "."Error in str $errline в $errfile\n");
//   }

ini_set("error_log", "tmp\php-error.log");
//   // Регистрация пользовательской функции-обработчика
//   set_error_handler("myErrorHandler");

//   $test=2;

//   if ($test>1) {
//     trigger_error("Пользовательская ошибка!", E_USER_ERROR);
//   }

// try {
//     //if (rand(0, 1)) {
//     // throw $obj;
//     if (!filemtime("spoon")) {
//      $obj = new Exception ();
//         throw $obj;
//     }

//     //}
// } catch (Exception $e) {
//     // Блок обработки исключительной ситуации
//     echo "Произошла исключительная ситуация\n";
// }
// echo "Штатная работа скрипта";

// echo "Начало программы.\n";
// try {
//     echo "Начало try-блока.\n";
//     outer ();
//     echo "Конец try-блока.\n";
// }
// catch ( Exception $e ) {
//     echo "Исключение: {$e->getMessage()}\n";
//     echo "Конец программы.\n";
// }

// function outer() {
//     echo "Вошли в функцию " . __METHOD__ . "\n";
//     inner ();
//     echo "Вышли из функции " . __METHOD__ . "\n";
// }

// function inner() {
//     echo "Вошли в функцию " . __METHOD__ . "\n";
//     // throw new Exception ( "Hello!" );
//     echo "Вышли из функции " . __METHOD__ . "\n";
// }

// function reciprocal($x)
// {
//     if ($x == 0) {
//         throw new Exception();
//     }
//     return 1 / $x;
// }

// try {
//     $x = 3;
//     $y = reciprocal($x);
//     echo $y;
// } catch (Exception $ex) {
//     echo "Error!"; //Error!
// }

// reciprocal(3);

// function exception_error_handler($errno, $errstr, $errfile, $errline ) {
//     //throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
//     echo $errno;
// }

// set_error_handler("exception_error_handler");

/* вызываем исключение */
//try {
//    strpos();
// }
// catch(ErrorException $e){
//     echo "Error!";
// }

// Пользовательская функция-обработчик
function myErrorHandler($errno, $msg, $errfile, $errline)
{
    // echo "Произошла ошибка с кодом $errno\n";
    // echo "Файл: $file, строка $line.\n";
    // echo "Текст ошибки: $msg";
    throw new ErrorException($msg, $errno, 0, $errfile, $errline);
}
// Регистрация пользовательской функции-обработчика
set_error_handler("myErrorHandler", E_ALL);
// Вызываем функцию для несуществующего файла, чтобы
// сгенерировать предупреждение, которое будет перехвачено,
try {
    filemtime("spoon");
} catch (ErrorException $e) {
    echo "Error!" . $e;
    error_log("Errors!" . $e);
}
