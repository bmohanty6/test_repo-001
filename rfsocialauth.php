<?php
require_once '/libs/rf/razorflow.php';

SocialAuth::setupGoogle (array(
        	'client_id' => '448320179376.apps.googleusercontent.com','client_secret' => 'MjNgxAL-kGaIynGcI0ydwPb0'
		));

SocialAuth::allowGoogleAccounts(array(
        'biswa.tbsc1@gmail.com'
));

Dashboard::Render();