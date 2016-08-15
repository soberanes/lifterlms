<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>


<?php if ( 'no' === get_option( 'lifterlms_registration_generate_username' ) ) : ?>

    <div class="llms-form-item-wrapper username">
        <label for="reg_username"><?php _e( 'Username', 'lifterlms' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text llms-input-text" name="username" id="reg_username" required value="<?php if ( ! empty( $_POST['username'] ) ) { echo esc_attr( $_POST['username'] ); } ?>" />
    </div>

<?php endif; ?>

<?php if ( 'yes' === get_option( 'lifterlms_registration_require_name' ) ) : ?>

    <div class="llms-form-item-wrapper firstname">
        <label for="reg_firstname"><?php _e( 'First Name', 'lifterlms' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text llms-input-text" name="firstname" id="reg_firstname" required value="<?php if ( ! empty( $_POST['firstname'] ) ) { echo esc_attr( $_POST['firstname'] ); } ?>" />
    </div>

    <div class="llms-form-item-wrapper lastname">
        <label for="reg_lastname"><?php _e( 'Last Name', 'lifterlms' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text llms-input-text" name="lastname" id="reg_lastname" required value="<?php if ( ! empty( $_POST['lastname'] ) ) { echo esc_attr( $_POST['lastname'] ); } ?>" />
    </div>
<?php endif; ?>

<?php do_action( 'lifterlms_register_form_after_names' ); ?>

<?php if ( 'yes' === get_option( 'lifterlms_registration_add_phone' ) ) : ?>
    <div class="llms-form-item-wrapper phone">
        <label for="llms_phone"><?php _e( 'Phone', 'lifterlms' ); ?></label>
        <input type="text" class="input-text llms-input-text" name="phone" id="llms_phone" value="<?php if ( ! empty( $_POST['phone'] ) ) { echo esc_attr( $_POST['phone'] ); } ?>" />
    </div>
<?php endif; ?>


<?php if ( 'yes' === get_option( 'lifterlms_registration_require_address' ) ) : ?>
    <div class="llms-form-item-wrapper billing_address_1">
        <label for="billing_address_1"><?php _e( 'Billing Address 1', 'lifterlms' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text llms-input-text" name="billing_address_1" id="billing_address_1" required value="<?php if ( ! empty( $_POST['billing_address_1'] ) ) { echo esc_attr( $_POST['billing_address_1'] ); } ?>" />
    </div>
    <div class="llms-form-item-wrapper billing_address_2">
        <label for="billing_address_2"><?php _e( 'Billing Address 2', 'lifterlms' ); ?></label>
        <input type="text" class="input-text llms-input-text" name="billing_address_2" id="billing_address_2" value="<?php if ( ! empty( $_POST['billing_address_2'] ) ) { echo esc_attr( $_POST['billing_address_2'] ); } ?>" />
    </div>
    <div class="llms-form-item-wrapper billing_city">
        <label for="billing_city"><?php _e( 'Billing City', 'lifterlms' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text llms-input-text" name="billing_city" id="billing_city" required value="<?php if ( ! empty( $_POST['billing_city'] ) ) { echo esc_attr( $_POST['billing_city'] ); } ?>" />
    </div>
    <div class="llms-form-item-wrapper billing_state">
        <label for="billing_state"><?php _e( 'Billing State', 'lifterlms' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text llms-input-text" name="billing_state" id="billing_state" required value="<?php if ( ! empty( $_POST['billing_state'] ) ) { echo esc_attr( $_POST['billing_state'] ); } ?>" />
    </div>
    <div class="llms-form-item-wrapper billing_zip">
        <label for="billing_zip"><?php _e( 'Billing Zip', 'lifterlms' ); ?> <span class="required">*</span></label>
        <input type="text" class="input-text llms-input-text" name="billing_zip" id="billing_address_1" required value="<?php if ( ! empty( $_POST['billing_zip'] ) ) { echo esc_attr( $_POST['billing_zip'] ); } ?>" />
    </div>
    <div class="llms-form-item-wrapper billing_country">
        <label for="billing_country"><?php _e( 'Billing Country', 'lifterlms' ); ?> <span class="required">*</span></label>
        <select id="llms_country_options" required name="billing_country">
            <?php $country_options = get_lifterlms_countries();
			foreach ( $country_options as $code => $name ) { ?>
                <option value="<?php echo $code; ?>"><?php echo $name; ?></option>
            <?php } ?>
        </select>
    </div>
<?php endif; ?>

<?php do_action( 'lifterlms_register_form_before_email' ); ?>

<div class="llms-form-item-wrapper email">
    <label for="reg_email"><?php _e( 'Email address', 'lifterlms' ); ?> <span class="required">*</span></label>
    <input type="email" class="input-text llms-input-text" name="email" id="reg_email" required value="<?php if ( ! empty( $_POST['email'] ) ) { echo esc_attr( $_POST['email'] ); } ?>" />
</div>

<?php if ( 'yes' === get_option( 'lifterlms_registration_confirm_email' ) ) : ?>

    <div class="llms-form-item-wrapper email_confirm">
        <label for="reg_email_2"><?php _e( 'Re-enter your email address', 'lifterlms' ); ?> <span class="required">*</span></label>
        <input type="email" class="input-text llms-input-text" name="email_confirm" id="reg_email_2" required value="<?php if ( ! empty( $_POST['email_confirm'] ) ) { echo esc_attr( $_POST['email_confirm'] ); } ?>" />
    </div>

<?php endif; ?>

<?php do_action( 'lifterlms_register_form_after_email' ); ?>

<div class="llms-form-item-wrapper password">
    <label for="reg_password"><?php _e( 'Password', 'lifterlms' ); ?> <span class="required">*</span></label>
    <input type="password" class="input-text llms-input-text" name="password" required id="reg_password" />
</div>

<div class="llms-form-item-wrapper password_2">
    <label for="password_2"><?php _e( 'Re-enter new password', 'lifterlms' ); ?> <span class="required">*</span></label>
    <input type="password" class="input-text llms-input-text" name="password_2" required id="password_2" />
</div>

<?php if ( ! isset( $_GET['product-id'] ) ) : ?>

    <div class="llms-form-item-wrapper voucher-wrapper">
        <?php
		/**
		 * @todo  move JS to it's own file, it's here b/c this is the only JS that needs to run on this page and it seemed wasteful
		 */
		?>
        <script type="text/javascript">
            jQuery( document ).on( 'ready', function() {
                jQuery( '#llms-voucher-expand' ).on( 'click', function( e ) {
                    e.preventDefault();
                    jQuery( this ).hide().next( '.voucher-expand' ).fadeIn( 400 );
                } );
            } );
        </script>

        <a href="#" class="voucher-expand-button" id="llms-voucher-expand"><?php _e( 'Have a Voucher?', 'lifterlms' ); ?></a>

        <div class="voucher-expand">
            <label for="llms_voucher_code"><?php _e( 'Voucher Code', 'lifterlms' ); ?></label>
            <input type="text" id="llms_voucher_code" placeholder="<?php _e( 'Voucher Code', 'lifterlms' ); ?>" name="llms_voucher_code">
        </div>
    </div>

<?php endif; ?>

<?php if ( 'yes' === get_option( 'lifterlms_registration_require_agree_to_terms' ) && get_option( 'lifterlms_terms_page_id' ) ) : ?>

    <div class="llms-form-item-wrapper agree_to_terms">
        <input type="checkbox" name="agree_to_terms" id="agree_to_terms" value="yes" />
        <label for="agree_to_terms">
            <?php printf( __( 'I have read and agree to the <a href="%s">Terms and Conditions</a>', 'lifterlms' ), get_the_permalink( get_option( 'lifterlms_terms_page_id' ) ) ); ?>
            <span class="required">*</span>
        </label>
    </div>

<?php endif; ?>

<?php if ( isset( $_GET['product-id'] ) ) : ?>
	<input type="hidden" name="product_id" value="<?php echo $_GET['product-id']; ?>" />
<?php endif; ?>

<!-- Used as anti-spam blocker -->
<div style="left:-999em; position:absolute;"><label for="trap"><?php _e( 'Anti-spam', 'lifterlms' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

<?php do_action( 'lifterlms_register_form' ); ?>
<?php do_action( 'register_form' ); ?>
