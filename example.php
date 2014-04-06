<?php

require_once 'findretros_config.php';
require_once 'findretros.php';

$FindRetros = new FindRetros();

if($FindRetros->hasClientVoted()) {

	echo 'You have voted!';

}else{

	// echo 'You have yet to vote!';

	$FindRetros->redirectClientToVote();

}