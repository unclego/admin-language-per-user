<?php
namespace admin_language_per_user;
?>
<table class="form-table">
	<tr>
		<th scope="row">
			<label for="<?php echo self::meta_name;?>"><?php _e( 'Site Language' ) ?></label>
		</th>
		<td>
		<?php
		wp_dropdown_languages( array(
				'name'         => self::meta_name,
				'id'           => self::meta_name,
				'selected'     => $locale,
				'languages'    => $languages,
				'translations' => $translations,
				'show_available_translations' => false, // (! is_multisite() || is_super_admin() ) && wp_can_install_language_pack(),
		));		
		?>
		</td>
	</tr>
</table>