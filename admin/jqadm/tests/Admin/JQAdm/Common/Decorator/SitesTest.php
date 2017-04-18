<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2016
 */


namespace Aimeos\Admin\JQAdm\Common\Decorator;


class SitesTest extends \PHPUnit\Framework\TestCase
{
	private $context;
	private $object;


	protected function setUp()
	{
		$this->context = \TestHelperJqadm::getContext();
		$templatePaths = \TestHelperJqadm::getTemplatePaths();

		$client = new \Aimeos\Admin\JQAdm\Product\Standard( $this->context, $templatePaths );
		$this->object = new \Aimeos\Admin\JQAdm\Common\Decorator\Sites( $client, $this->context, $templatePaths );
	}


	protected function tearDown()
	{
		unset( $this->object, $this->context );
	}


	public function testSetView()
	{
		$view = \TestHelperJqadm::getView();

		$this->object->setView( $view );

		$this->assertInternalType( 'array', $view->sitesList );
	}
}
