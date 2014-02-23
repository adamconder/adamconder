<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_AdamConder extends Theme
{
    public $name			= 'AdamConder';
    public $author			= 'Adam Conder';
    public $author_website	= 'http://adamconder.com/';
    public $website			= 'http://adamconder.com/';
    public $description		= 'Adamconder Portfolio';
    public $version			= '1.0.0';
	public $options 		= array(
		'slider' => array(
			'title'         => 'Slider',
			'description'   => 'Would you like to display the slider on the homepage?',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
		'show_breadcrumbs' 	=> array(
			'title'         => 'Do you want to show breadcrumbs?',
			'description'   => 'If selected it shows a string of breadcrumbs at the top of the page.',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => true
		),
	);
}

/* End of file theme.php */
