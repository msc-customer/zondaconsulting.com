<div class="postbox rw-body">
    <h3>Save</h3>
    <div class="inside update-nag" style="margin: 0; border: 0;">
        <p class="submit" style="margin: 0; padding: 10px;">
            <input type="hidden" name="<?php echo rw_settings()->form_hidden_field_name; ?>" value="Y">
            <input type="hidden" id="rw_options_hidden" name="rw_options" value="" />
            <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
            <a href="<?php echo WP_RW__ADDRESS;?>/get-the-word-press-plugin/" class="button-secondary rw-upgrade-button" target="_blank">Upgrade Now!</a>
        </p>
    </div>
</div>