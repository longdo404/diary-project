<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}
	
	public function test()
	{
	    $a = array("1","2","3","4");
	    $this->assertEquals("1","2");
	}

}
