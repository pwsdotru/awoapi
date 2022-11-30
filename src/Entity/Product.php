<?php

namespace AwoAPI\Entity;

use AwoAPI\Entity\Base;

/**
 * Class Product
 *
 * @package AwoAPI\Entity
 * В терминологии документации к АвтоВебОфис АПИ это goods
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
     * @var int $id - Идентификатор товара
     */
    protected $id;
    /**
     * @var $marking - Артикул товара
     */
    protected $marking;
    /**
     * @var int $categoryId - Категория товара
     */
    protected $categoryId;
    /**
     * @var $inAffiliate - признак отображения в партнерской программе
     */
    protected $inAffiliate;
    /**
     * @var $goods - товар
     */
    protected $goods;
    /**
     * @var $variantsName - варианты имени
     */
    protected $variantsName;
    /**
     * @var $image - изображение товара
     */
    protected $image;
    /**
     * @var $imageUrl - ссылка на внешнее изображение
     */
    protected $imageUrl;
    /**
     * @var $description - описание товара
     */
    protected $description;
}
