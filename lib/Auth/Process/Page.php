<?php

class sspmod_blank_Auth_Source_Page extends sspmod_saml_Auth_Source_SP
{
	public function __construct($info, $config)
	{
		parent::__construct($info, $config);
	}

	public function authenticate_passive(&$state)
	{
		return parent::authenticate_passive($state);
	}

	public function authenticate(&$state)
	{
		$state['Attributes'] = [
			'authenticated-at' => [
				'home'
			],
		];
	}
}
