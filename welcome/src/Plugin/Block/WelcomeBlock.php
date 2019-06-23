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

		$user = \Drupal::currentUser();

		$id = $user->id();
		$name = $user->getUsername();
		$timestamp = $user->getLastAccessedTime();
		$last_login = date('F jS, Y g:i a', $timestamp);

		$url_object = Url::fromRoute('entity.user.canonical', ['user' => $id]);
		$link = [
		  '#type' => 'link',
		  '#url' => $url_object,
		  '#title' => $this->t('Visit your profile'),
		];

		// return array(
	 //    '#title' => 'Hello!! World!',
		// 	'#last_login' => $last_login,
		// 	'#link' => $link,
	 // 	);
		//return array('#markup' => 'jasdkfjasf');

		return [
		  '#theme' => 'block__welcome',
	    '#username' => $name,
			'#last_login' => $last_login,
			'#link' => $link,
		  '#attributes' => [],
		];
	}

}
