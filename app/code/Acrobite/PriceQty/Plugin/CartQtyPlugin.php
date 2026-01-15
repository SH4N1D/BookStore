<?php
namespace Acrobite\PriceQty\Plugin;

use Magento\Framework\DataObject;

class CartQtyPlugin
{
    public function beforeAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ) {
        if ($requestInfo instanceof DataObject) {
            $requestInfo->setQty(5);
        } elseif (is_array($requestInfo)) {
            $requestInfo['qty'] = 5;
        }

        return [$productInfo, $requestInfo];
    }
}
