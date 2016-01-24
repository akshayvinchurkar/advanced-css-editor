<?php
// Class to create a custom layout control for CSS editors
class CSS_Highlighter_Custom_Control extends WP_Customize_Control {
	  // Render the content on the theme customizer page
	  public function render_content()  {
			?>
				<label>
					<?php if ( ! empty( $this->label ) ) : ?>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $this->description ) ) : ?>
						<span class="description customize-control-description"><?php echo $this->description; ?></span>
					<?php endif; ?>
					<textarea id="<?php echo $this->id; ?>" rows="5" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
				</label>

			<?php
	   }
}
?>