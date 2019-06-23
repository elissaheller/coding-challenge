<?php
 
namespace Drupal\welcome\Plugin\Block;
 
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

/**
 * Provides a Welcome Block
 *
 * @Block(
 *   id = "welcome_block",
 *   admin_label = @Translation("Welcome block"),
 * )
 */ 
class WelcomeBlock extends BlockBase {
	/**
	 * {@inheritdoc}
	 */
	public function build() {

		$markup = '';
		$user = \Drupal::currentUser();

		if ($user->id() !== 0) {
			$id = $user->id();
			$name = $user->getUsername();
			$timestamp = $user->getLastAccessedTime();
			$last_login = date('F jS, Y g:i a', $timestamp);

			$config = \Drupal::config('welcome.adminsettings'); 
			$message = $config->get('welcome_message');   

			$markup = "<p>Hello {$name}!</p>";
			$markup .= "<p>Your last log in was {$last_login}.</p>";
			$markup .= "<p><a href='/user/{$id}'>Vist your profile</a></p>"; 
			$markup .= "<p>{$message}<p>";
		}

		return array('#markup' => $markup);
	}

}
