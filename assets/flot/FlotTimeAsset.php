<?php
/**
 * FlotTimeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\flot\FlotTimeAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\flot\FlotTimeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\flot\FlotTimeAsset',
 */

namespace p2m\assets\flot;


class FlotTimeAsset extends \p2m\assets\flot\FlotAssetBase
{
	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/flot-##-version-##',
			'js' => [
				'jquery.flot.time.min.js',
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/flot/##-version-##',
			'js' => [
				'jquery.flot.time.min.js',
			],
		],
		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
