<?php

namespace App\Enums;
use BenSampo\Enum\Enum;

class UsersTableEnum extends Enum{

	const NAME = 'name';
	const EMAIL = 'email';
	const PHONE = 'phone';

	public static function getColumnsWithLables()
	{
		return [
			['column'=>self::NAME,'label'=>__('Name')],
			['column'=>self::EMAIL,'label'=>__('Email')],
			['column'=>self::PHONE,'label'=>__('phone')],
		];
		 
	}

}

?>