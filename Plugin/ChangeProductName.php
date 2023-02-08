<?php

namespace Bluethinkinc\CustomWidget\Plugin;

class ChangeProductName 
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result." Update Name";
    }
}