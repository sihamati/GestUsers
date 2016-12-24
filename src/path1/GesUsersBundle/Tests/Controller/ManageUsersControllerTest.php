<?php

namespace path1\GesUsersBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ManageUsersControllerTest extends WebTestCase
{
    public function testAdduser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AddUser');
    }

    public function testUpdateuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UpdateUser');
    }

    public function testDeleteuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/DeleteUser');
    }

}
