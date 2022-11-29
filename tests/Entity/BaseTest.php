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
            public $id;
            public $customerContact;
            protected $mapping = [
                'id_customer' => 'customerId',
                ];

            public function getPropertyName(string $name): string
            {
                return parent::getPropertyName($name);
            }
        };
    }

    /**
     * @covers Base::setData
     */
    public function testSetData()
    {
        $data = [
            'id' => 2,
            'customer_contact' => 'customer1'
        ];
        $this->obj->setData($data);

        self::assertEquals(2, $this->obj->id);
        self::assertEquals('customer1', $this->obj->customerContact);
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
            ['customer_contact_name', 'customerContactName'],
            ['id_customer', 'customerId'],
        ];
    }
}
