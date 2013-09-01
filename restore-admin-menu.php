<?php
/*
Plugin Name: Restore Admin Menu (ru_RU)
Plugin URI: http://codex.wordpress.org/ЧАВО/Исчезло_меню_в_панели_управления
Description: Restores the admin menu when updating from 3.1.x or an older install to the latest release from ru.wordpress.org.
Author: Sergey Biryukov
Author URI: http://ru.wordpress.org/
Version: 0.1
*/ 

function ram_remove_old_files() {
	if ( ! function_exists( 'ru_accomodate_markup' ) )
		return;

	remove_action( 'admin_head',            'ru_accomodate_markup' );
	remove_action( 'admin_print_styles',    'ru_accomodate_markup' );
	remove_action( 'admin_enqueue_scripts', 'ru_accomodate_markup' );

	$old_files = array( 'ru_RU.php', 'ru_RU.css', 'ru_RU-ie.css', 'ms-ru_RU.css' );

	foreach ( $old_files as $file ) {
		if ( file_exists( WP_LANG_DIR . '/' . $file ) )
			@unlink( WP_LANG_DIR . '/' . $file );
	}
}
add_action( 'admin_init', 'ram_remove_old_files' );
?>