<?php
	if (filter_var(htmlentities($_REQUEST['mail']), FILTER_VALIDATE_EMAIL)) {
		include "../../api/fonctions.php";
		$sujet = "Formulaire de contact de la CDR";
		$contenu = '<strong>Informations sur l\'expediteur</strong><br />
		Nom / prénom : '.htmlentities($_REQUEST['nom']).'<br />
		Email : <a href="mailto:'.htmlentities($_REQUEST['mail']).'">'.htmlentities($_REQUEST['mail']).'</a>
		<br /><br /><div style="padding: 30px; border-top: 3px  solid  black;"></div>
		'.nl2br(htmlentities($_REQUEST['msg'])).'<br />
		<br />';

		send_mail(htmlentities($_REQUEST['mail']), $sujet, $contenu);
		if(send_mail("elhaddad.elmehdi@gmail.com", $sujet, $contenu))
			echo "OK";
		else echo "ERROR";
	}else echo "nope";
