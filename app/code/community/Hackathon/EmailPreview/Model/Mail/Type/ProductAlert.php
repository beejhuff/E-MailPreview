<?php

class Hackathon_EmailPreview_Model_Mail_Type_ProductAlert
{
    const TYPE_PRODUCT_ALERT = 'test_product_alert_email_template';
    
    /**
     * @param Varien_Event_Observer $observer
     * @return Hackathon_EmailPreview_Model_Mail_Type_OrderEmail
     */
    public function hackathonEmailpreviewRenderEmailBefore(Varien_Event_Observer $observer)
    {
        if (!in_array($observer->getEvent()->getData('templateType'), array(self::TYPE_PRODUCT_ALERT))) {
            return $this;
        }

        //@todo change logic here
        $templateParams = $observer->getEvent()->getData('templateParams');
        /* $requestParams = $templateParams->getRequestParams();
        $customerId = $requestParams['customerId'];
        $customer = Mage::getModel('customer/customer')->load($customerId);
        $customer->setPassword(Mage::helper('hackathon_emailpreview')->__('[yourpasswordhere]'));
        $templateParams->setCustomer($customer);*/

        return $this;
    }
}
