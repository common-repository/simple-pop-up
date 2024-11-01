<?php

if ( !defined('ABSPATH') ){ exit; }


class SPM_Scripts{

	function __construct()
	{
		add_action( 'wp_enqueue_scripts', array($this,'spm_primary_script') );
	}

	function spm_primary_script()
	{
		wp_enqueue_style( 'smm-primary-style', SMM_URL . '/assets/css/smm-primary-style.css' );
		wp_enqueue_script( 'smp-js', SMM_URL . '/assets/js/smp-scipt.js', array( 'jquery' ), SMM_VERSION, true );
	}
}

new SPM_Scripts;