<?php
namespace Acrobite\PriceQty\Plugin;

class ProductPricePlugin
{
    public function afterGetValue(\Magento\Catalog\Pricing\Price\FinalPrice $subject, $result)
    {
        return $result * 4;
    }
}