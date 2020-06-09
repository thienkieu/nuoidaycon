<?php
namespace Dragon\Plugins\Elementor;

use Elementor\Controls_Manager;
use ElementorPro\Modules\QueryControl\Controls\Group_Control_Related;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Class Posts
 */
class Dragon_Posts extends \ElementorPro\Modules\Posts\Widgets\Posts{

	public function get_name() {
		return 'posts';
	}

	public function get_title() {
		return __( 'Dragon Posts', 'elementor-pro' );
	}

	public function get_keywords() {
		return [ 'posts', 'cpt', 'item', 'loop', 'query', 'cards', 'custom post type' ];
	}

	

	protected function register_query_section_controls() {
		$this->start_controls_section(
			'section_query',
			[
				'label' => __( 'Query', 'elementor-pro' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_group_control(
			Group_Control_Related::get_type(),
			[
				'name' => $this->get_name(),
				'presets' => [ 'full' ],
				'exclude' => [
					'posts_per_page', //use the one from Layout section
				],
			]
		);

		$this->add_control(
			'dragon_category',
			[
				'label' => __( 'Category slugs', 'elementor-pro' ),
				'type' => Controls_Manager::TEXT,
			]
		);


		$this->end_controls_section();
	}

}
