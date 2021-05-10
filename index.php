<?php
header('Content-Type: application/json; charset=utf-8');
// header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Tashkent');
function dump($what){echo '<pre>'; print_r($what); echo '</pre>';};
function get_sity($url){
  $ch = curl_init($url);
  // curl_setopt($ch, CURLOPT_PROXY, '51.210.150.171:3128');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_HEADER, false); // true - чтобы вывести заголовки 
  $html = curl_exec($ch);
  curl_close($ch); 
  return $html;
};
$result = get_sity("https://www.instagram.com/p/COhmc0TF8T3/");
dump($result);
// require('../vendor/autoload.php');

// $app = new Silex\Application();
// $app['debug'] = true;

// // Register the monolog logging service
// $app->register(new Silex\Provider\MonologServiceProvider(), array(
//   'monolog.logfile' => 'php://stderr',
// ));

// // Register view rendering
// $app->register(new Silex\Provider\TwigServiceProvider(), array(
//     'twig.path' => __DIR__.'/views',
// ));

// // Our web handlers

// $app->get('/', function() use($app) {
//   $app['monolog']->addDebug('logging output.');
//   return $app['twig']->render('index.twig');
// });

// $app->run();
