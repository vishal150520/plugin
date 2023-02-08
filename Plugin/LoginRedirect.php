<?php

namespace Bluethinkinc\CustomWidget\Plugin;

use Magento\Checkout\Model\Session;

class LoginRedirect 
{
    protected $_checkoutSession;

    public function  __construct(Session $checkoutSession){
        $this->_checkoutSession = $checkoutSession;
    }
    
    public function afterExecute(\Magento\Customer\Controller\Account\LoginPost $subject, $result)
    {
        $itemCount = ($this->_checkoutSession->getQuote()-> getItemsCount());
       if($itemCount)
       {
        return $result->setPath('checkout/');
       }
       else 
       {
        return $result;
       }
      
    }
}