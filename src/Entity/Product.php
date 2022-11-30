<?php

namespace AwoAPI\Entity;

use AwoAPI\Entity\Base;

/**
 * Class Product
 *
 * @package AwoAPI\Entity
 * � ������������ ������������ � ����������� ��� ��� goods
 *
 * @method int getId()
 * @method getMarking()
 * @method getCategoryId()
 */
class Product extends Base
{
    protected $mapping = [
        'id_goods'  => 'id',
        'id_goods_category' => 'categoryId',
        'url_external_image' => 'imageUrl',
        'brief_description' => 'description',
    ];
    /**
     * @var int $id - ������������� ������
     */
    protected $id;
    /**
     * @var $marking - ������� ������
     */
    protected $marking;
    /**
     * @var int $categoryId - ��������� ������
     */
    protected $categoryId;
    /**
     * @var $inAffiliate - ������� ����������� � ����������� ���������
     */
    protected $inAffiliate;
    /**
     * @var $goods - �����
     */
    protected $goods;
    /**
     * @var $variantsName - �������� �����
     */
    protected $variantsName;
    /**
     * @var $image - ����������� ������
     */
    protected $image;
    /**
     * @var $imageUrl - ������ �� ������� �����������
     */
    protected $imageUrl;
    /**
     * @var $description - �������� ������
     */
    protected $description;
}
