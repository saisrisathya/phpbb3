<?php
/**
*
* @package testing
* @copyright (c) 2011 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @group functional
*/
class phpbb_functional_browse_test extends phpbb_functional_test_case
{
	public function test_index()
	{
		$crawler = $this->request('GET', 'index.php');
		$this->assert_response_success();
		$this->assertGreaterThan(0, $crawler->filter('.topiclist')->count());
	}

	public function test_viewforum()
	{
		$crawler = $this->request('GET', 'viewforum.php?f=2');
		$this->assert_response_success();
		$this->assertGreaterThan(0, $crawler->filter('.topiclist')->count());
	}

	public function test_viewtopic()
	{
		$crawler = $this->request('GET', 'viewtopic.php?t=1');
		$this->assert_response_success();
		$this->assertGreaterThan(0, $crawler->filter('.postbody')->count());
	}
}
