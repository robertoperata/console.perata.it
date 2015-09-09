<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 08/09/15
 * Time: 21.22
 */

namespace Priz\Bundle\ConsoleBundle\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConsoleControllerTest extends WebTestCase{

    public function testList(){
        $client = static::createClient();
        $crawler = $client->request('GET', '/console');
        $this->assertGreaterThan(
            0,
            $crawler->filter('h1')->count()
        );

    }

}