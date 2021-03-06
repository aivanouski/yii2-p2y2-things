<?php
/**
 * DataTablesScrollerAsset.php
 *
 * Yii2 asset for DataTables Scroller
 * https://github.com/DataTables/Scroller
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things
 * @class \p2m\assets\DataTablesScrollerAsset
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\assets\datatables\DataTablesScrollerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\datatables\DataTablesScrollerAsset',
 */

namespace p2m\assets\datatables;

class DataTablesScrollerAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $version = '1.4.2';

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/Scroller-##-version-##',
			'css' => [
				'css/scroller.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
			],
		],
		'static' => [
			'baseUrl' => 'https://cdn.datatables.net/scroller/##-version-##',
			'css' => [
				'css/scroller.bootstrap.min.css',
			],
			'js' => [
				'js/dataTables.scroller.min.js',
			],
		],
		'depends' => [
			'p2m\assets\base\P2JqueryAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
