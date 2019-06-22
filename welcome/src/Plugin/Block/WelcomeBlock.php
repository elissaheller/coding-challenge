<?php
 
namespace Drupal\welcome\Plugin\Block;
 
use Drupal\Core\Block\BlockBase;

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
		$last_login = $user->getLastLoginTime();
		$id = $user->id;
		$name = $user->getUsername();

		$url_object = Url::fromRoute('entity.user.canonical', ['user' => $user->id]);
		$link = [
		  '#type' => 'link',
		  '#url' => $url_object,
		  '#title' => $this->t('Visit your profile'),
		];

		return array(
	    '#markup' => $this->t('Hello, World!'),
	 	);
	}

}
