<?php
declare(strict_types=1);

namespace Bazaarvoice\Connector\Plugin\ProductList;

use Bazaarvoice\Connector\Model\Source\ProductList;

/**
 * Class Related
 *
 * @package Bazaarvoice\Connector\Plugin\ProductList
 */
class Related extends Item
{
    /**
     * @var string
     */
    protected $type = ProductList::RELATED;
}
