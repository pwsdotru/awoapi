<?php

namespace Entity;

use AwoAPI\Entity\Base;
use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    /**
     * @var Base
     */
    private $obj;

    public function setUp(): void
    {
        parent::setUp();
        $this->obj = new class extends Base {
            public function getPropertyName(string $name): string
            {
                return parent::getPropertyName($name);
            }
        };
    }

    /**
     * @covers Base::getPropertyName
     * @dataProvider dataPropertyName
     */
    public function testGetPropertyName($snake, $camel)
    {
        self::assertEquals($camel, $this->obj->getPropertyName($snake));
    }

    public function dataPropertyName()
    {
        return [
            ['id', 'id'],
            ['user_id', 'userId'],
            ['customer_contact_name', 'customerContactName']
        ];
    }
}
