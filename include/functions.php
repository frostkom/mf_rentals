<?php

function confirm_payment_webshop($data)
{
	$obj_rentals = new mf_rentals();
	$obj_rentals->confirm_payment($data);
}