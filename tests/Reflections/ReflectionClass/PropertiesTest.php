<?php

namespace ApiGen\Tests\Reflections\ReflectionClass;

use InvalidArgumentException;


class PropertiesTest extends TestCase
{

	public function testGetProperty()
	{
		$this->assertInstanceOf(
			'ApiGen\Reflection\ReflectionProperty',
			$this->reflectionClass->getProperty('publicProperty')
		);
	}


	/**
	 * @expectedException InvalidArgumentException
	 */
	public function testGetPropertyNonExisting()
	{
		$this->reflectionClass->getProperty('notPresentProperty');
	}


	public function testGetProperties()
	{
		$this->assertCount(4, $this->reflectionClass->getProperties());
	}


	public function testGetOwnProperties()
	{
		$this->assertCount(2, $this->reflectionClass->getOwnProperties());
	}


	public function testGetMagicProperties()
	{
		$this->assertCount(2, $this->reflectionClass->getMagicProperties());
	}


	public function testGetOwnMagicProperties()
	{
		$this->assertCount(1, $this->reflectionClass->getOwnMagicProperties());
	}


	public function testGetInheritedProperties()
	{
		$this->assertCount(1, $this->reflectionClass->getInheritedProperties());
	}


	public function testGetInheritedMagicProperties()
	{
		$this->assertCount(0, $this->reflectionClass->getInheritedMagicProperties());
	}


	public function testGetUsedProperties()
	{
		$this->assertCount(1, $this->reflectionClass->getUsedProperties());
	}


	public function testGetUsedMagicProperties()
	{
		$this->assertCount(1, $this->reflectionClass->getUsedMagicProperties());
	}

}
