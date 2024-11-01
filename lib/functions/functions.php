<?php

if ( ! defined( 'ABSPATH' ) ){ exit; }

class Simple_Pop_Up
{
	function __construct()
	{
		add_shortcode( 'pop_me_up', array( $this, 'pop_me_up_callback' ) );
	}


	function pop_me_up_callback($atts)
	{
		//this is a sample shortcode with params
		$atts = shortcode_atts(array( 
			'btn_name'         =>    '',
			'id'                 =>    ''),$atts );

			$page_id = esc_attr($atts['id']);
			$button_name = esc_attr($atts['btn_name']);

			?>
			<button id="myBtn"><?php echo $button_name;?></button>

			<!-- The Modal -->
			<div id="myModal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					<?php


					$args = (array( 
						'post_type'         =>    'simple_modal',
						'p'                 =>    $page_id));



					

					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						echo the_content();
					endwhile;

					?>
				</div>

			</div>
			<?php
		}
	}

	new Simple_Pop_Up;