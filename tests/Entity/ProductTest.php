<?php

namespace Entity;

use AwoAPI\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testSetData()
    {
        $data = [
            'id_goods' => 12,
            'marking' => 'test',
            'id_goods_category' => 10,
        ];

        $product = new Product();
        $product->setData($data);
        self::assertEquals(12, $product->getId());
        self::assertEquals(10, $product->getCategoryId());
        self::assertEquals('test', $product->getMarking());
    }
}
