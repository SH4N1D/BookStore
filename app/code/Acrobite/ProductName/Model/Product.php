<?php
namespace Acrobite\ProductName\Model;

/**
 * Overriding the Core Product Model
 */
class Product extends \Magento\Catalog\Model\Product
{
    /**
     * Get product name and force it to "urname"
     *
     * @return string
     */
    public function getName()
    {
        // Instead of returning $this->_getData(self::NAME), we return your custom string
        return "Shanid";
    }
}