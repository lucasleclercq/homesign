<?php 
$host = 'naimedardncapi.mysql.db';
$bd= 'naimedardncapi';
$user = 'naimedardncapi';
$password = 'Gowi1802';
$attrs = array(PDO::ATTR_PERSISTENT => true);

try
{
    $bdd = new PDO('mysql:host='.$host.';dbname='.$bd, $user, $password, $attrs);
	// the following tells PDO we want it to throw Exceptions for every error.
	// this is far more useful than the default mode of throwing php errors
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec('SET NAMES UTF8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>