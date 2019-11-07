<?php
 
namespace Ankush\Override\Plugin;
 
class CustomerName
{    
    public function afterGetName(\Magento\Customer\Block\Account\Dashboard\Info $subject, $result)
    {
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
        $logger->debug(__METHOD__);
        $result = 'Mr. '.$result;
        return $result;
    }
       
}
?>