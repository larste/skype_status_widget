<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Widget_Skype_Status extends Widgets
{
	public $title = 'Skype Status';
	public $description = 'Display Skype status on your website';
	public $author = 'Lars Steen';
	public $website = 'https://github.com/larste/skype_status';
	public $version = '1.0.1';

	public $fields = array(
		array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'required'
		)
	);

	public function run($options)
	{
		switch($options['skype_button']) {
			case 'green_white_153x63':
				$img_url = $this->get_static_image('call_green_white_153x63.png');
				break;
			case 'green_white_92x82':
				$img_url = $this->get_static_image('call_green_white_92x82.png');
				break;
			case 'blue_white':
				$img_url = $this->get_static_image('call_blue_white_124x52.png');
				break;
			case 'blue_transparent':
				$img_url = $this->get_static_image('call_blue_transparent_34x34.png');
				break;
			case 'balloon':
				$img_url = $this->get_dynamic_image($options['username'], 'balloon');
				break;
			case 'rectangle':
				$img_url = $this->get_dynamic_image($options['username'], 'bigclassic');
				break;
		}
		return array(
			'username' => $options['username'],
			'img_url'  => $img_url
			);
	}

	protected function get_static_image($img)
	{
		return 'http://download.skype.com/share/skypebuttons/buttons/' . $img;
	}

	protected function get_dynamic_image($username, $img)
	{
		return 'http://mystatus.skype.com/' . $img . '/' . $username;
	}
}
