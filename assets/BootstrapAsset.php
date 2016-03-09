<?php
/**
 * BootstrapAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2016
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @license MIT
 */

namespace p2made\assets;

class BootstrapAsset extends P2AssetBundle
{
	private $resourceData = array(
		'pub' => [
			'sourcePath' => '@vendor/bower/bootstrap/dist',
			'css' => [
				'css/bootstrap.min.css',
			],
		],
		'cdn' => [
			'baseUrl' => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6',
			'css' => [
				'css/bootstrap.min.css',
			],
		],
	);

	public function init()
	{
		if(isset(\Yii::$app->params['p2assets']['bwTheme'])) {
			$themeName = \Yii::$app->params['p2assets']['bwTheme'];
			$this->resourceData['sourcePath'] = '@vendor/bower/bootswatch/' . $themeName;
			$this->resourceData['pub']['baseUrl'] = [
				'bootswatch/3.3.6/' . $themeName,
			];
			$this->resourceData['pub']['css'] = [
				'bootstrap.min.css',
			];
			$this->resourceData['cdn']['css'] = [
				'bootstrap.min.css',
			];
		}

		$this->configureAsset($this->resourceData);
		parent::init();
	}
}


/* params
	'p2assets' => [
		'useCdn' => true, // false or not set to use published assets
		'bwTheme' = 'cerulean', // set to _one_ of:
			'cerulean', 'cosmo', 'cyborg', 'darkly',
			'flatly', 'journal', 'lumen', 'paper',
			'readable', 'sandstone', 'simplex', 'slate',
			'spacelab', 'superhero', 'united', 'yeti',
	],
*/
