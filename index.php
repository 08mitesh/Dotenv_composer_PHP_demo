<?php 
error_reporting(-1);

	require_once 'vendor/autoload.php';
// $repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
//     ->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
//     ->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
//     ->immutable()
//     ->make();

$dotenv = Dotenv\Dotenv::createUnsafeMutable(__DIR__);
$dotenv->load();
echo '<pre>';
var_dump($dotenv);


	$a= getenv('DB_HOST');

	echo $a;
	exit;

?>