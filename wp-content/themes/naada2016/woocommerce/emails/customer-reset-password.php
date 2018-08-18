<?php
/**
 * Customer Reset Password email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php _e( 'Someone requested that the password be reset for the following account:', 'woocommerce' ); ?></p>
<p><?php printf( __( 'Username: %s', 'woocommerce' ), $user_login ); ?></p>
<p><?php _e( 'If this was a mistake, just ignore this email and nothing will happen.', 'woocommerce' ); ?></p>
<p><?php _e( 'To reset your password, visit the following address:', 'woocommerce' ); ?></p>
<p>
    <a class="link" href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>">
			<?php _e( 'Click here to reset your password', 'woocommerce' ); ?></a>
</p>
<p>----------------</p>

<p><?php _e( 'Un utilisateur a fait une demande pour réinitialiser le mot de passe pour le compte :', 'woocommerce' ); ?></p>
<p><?php printf( __( 'identifiant : %s', 'woocommerce' ), $user_login ); ?></p>
<p><?php _e( 'Si c’est une erreur, ignorer simplement ce courriel et il n’y aura aucun changement.', 'woocommerce' ); ?></p>
<p><?php _e( 'Pour réinitialiser votre mot de passe, visitez l’adresse suivante :', 'woocommerce' ); ?></p>
<p>
    <a class="link" href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>">
			<?php _e( 'cliquez ici pour réinitialiser votre mot de passe', 'woocommerce' ); ?></a>
</p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
