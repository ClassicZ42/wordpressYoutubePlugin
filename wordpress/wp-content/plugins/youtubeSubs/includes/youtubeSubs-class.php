<?php
/**
 * Adds Youtube_Subs widget.
 */
class Youtube_Subs_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'youtubesubs_widget', // Base ID
			esc_html__( 'Youtube subs', 'yts_domain' ), // Name
			array( 'description' => esc_html__( 'Widget to display youtube subs', 'yts_domain' ), ) // Args description
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];// whatever you want to display before the widget can come here like  ( <div>)

    // checks if theres a title if there is one it displayes it
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
    /// widget content output
		echo '<div class="g-ytsubscribe" data-channelid="'.$instance['channel'].'" data-layout="'.$instance['layout'].'" data-count="default"></div>';

		echo $args['after_widget'];// whatever you want to display after the widget can come here like ( </div>)
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
   // all the inputs
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Youtube Subs', 'yts_domain' );
    // create a var for chanel
    $channel = ! empty( $instance['channel'] ) ? $instance['channel'] : esc_html__( 'Youtube Subs', 'UC3s0BtrBJpwNDaflRSoiieQ' );
    // create a var for layout
    $layout = ! empty( $instance['layout'] ) ? $instance['layout'] : esc_html__( 'default', 'yts_domain' );
		?>

    <!--TITLE-->
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
      <?php esc_attr_e( 'Title:', 'yts_domain' ); ?>
    </label>

		<input
    class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
    type="text"
    value="<?php echo esc_attr( $title );
     ?>">

    </p>

    <!--Channel-->
    <!-- Copy the above code and change index to channel son -->
    <p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'channel' ) ); ?>">
      <?php esc_attr_e( 'Channel Id:', 'yts_domain' ); ?>
    </label>

    <input
    class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'channel' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'channel' ) ); ?>"
    type="text"
    value="<?php echo esc_attr( $channel );
     ?>">

    </p>

    <!--layout-->
    <!-- Copy the above code and change index to channel son -->
    <p>
    <label for="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>">
      <?php esc_attr_e( 'Layout Id:', 'yts_domain' ); ?>
    </label>

    <select
    class="widefat"
    id="<?php echo esc_attr( $this->get_field_id( 'layout' ) ); ?>"
    name="<?php echo esc_attr( $this->get_field_name( 'layout' ) ); ?>"
    value="<?php echo esc_attr( $channel );
     ?>">
      <option value="default " <?php echo ($layout == 'default') ? 'selected': '' ?>>
          Default
       </option>
       <option value="full" <?php echo ($layout == 'full') ? 'selected': '' ?>>
           Full
        </option>

     </select>

    </p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
    // all your fields will be in this instance array
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    // update the channel so it can save when changed in backend
    $instance['channel'] = ( ! empty( $new_instance['channel'] ) ) ? strip_tags( $new_instance['channel'] ) : '';
    // update the layout so it can save when changed in backend
    $instance['layout'] = ( ! empty( $new_instance['layout'] ) ) ? strip_tags( $new_instance['layout'] ) : '';
		return $instance;
	}

} // class Foo_Widget
