<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
*
*/
class LLMS_Metabox_Select_Field extends LLMS_Metabox_Field implements Meta_Box_Field_Interface
{
	/**
	 * Class constructor
	 * @param array $_field Array containing information about field
	 */
	function __construct($_field)
	{
		$this->field = $_field;
	}

	/**
	 * Outputs the Html for the given field
	 * @return HTML
	 */
	public function Output()
	{
		global $post;

		parent::Output(); ?>

		<select
			id="<?php echo esc_attr( $this->field['id'] ); ?>"
			name="<?php echo esc_attr( $this->field['id'] ); ?>"
			class="<?php echo esc_attr( $this->field['class'] ); ?>"
			<?php if( $this->field['multi'] ): ?>
				multiple="multiple"
			<?php endif; ?>
		>
		    <option value="">None</option>

			<?php foreach ( $this->field['value'] as $option  ) :
				if ( $option['key'] == $this->meta ) :
			?>
				<option value="<?php echo $option['key']; ?>" selected="selected"><?php echo $option['title']; ?></option>

			<?php else : ?>
				<option value="<?php echo $option['key']; ?>"><?php echo $option['title']; ?></option>

			<?php endif; ?>
			<?php endforeach; ?>
 		</select>
		<?php
		parent::CloseOutput();
	}
}

