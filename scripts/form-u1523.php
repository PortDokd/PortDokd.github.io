<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Custom Hosting Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Selected',
		'checkbox_unchecked' => 'Unselected',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'zacojansen@gmail.com',
		'to' => 'zacojansen@gmail.com'
	),
	'fields' => array(
		'custom_U1525' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Hosting Type',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Hosting Type\' is required.'
			)
		),
		'Email' => array(
			'order' => 5,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email address.'
			)
		),
		'custom_U1544' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Type Of Domain: (The End Extension E.g .com)',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Type Of Domain: (The End Extension E.g .com)\' is required.'
			)
		),
		'custom_U1540' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Number Of Domains',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Number Of Domains\' is required.'
			)
		),
		'custom_U1806' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Number Of Websites',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Number Of Websites\' is required.'
			)
		)
	)
);

process_form($form);
?>
