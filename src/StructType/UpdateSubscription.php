<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateSubscription StructType
 * Meta informations extracted from the WSDL
 * - type: tns:updateSubscription
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class UpdateSubscription extends AbstractStructBase
{
    /**
     * The commonRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonRequest
     */
    public $commonRequest;
    /**
     * The queryRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\QueryRequest
     */
    public $queryRequest;
    /**
     * The subscriptionRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\SubscriptionRequest
     */
    public $subscriptionRequest;
    /**
     * Constructor method for updateSubscription
     * @uses UpdateSubscription::setCommonRequest()
     * @uses UpdateSubscription::setQueryRequest()
     * @uses UpdateSubscription::setSubscriptionRequest()
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @param \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest
     * @param \Restoore\SystempayWebservice\StructType\SubscriptionRequest $subscriptionRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null, \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest = null, \Restoore\SystempayWebservice\StructType\SubscriptionRequest $subscriptionRequest = null)
    {
        $this
            ->setCommonRequest($commonRequest)
            ->setQueryRequest($queryRequest)
            ->setSubscriptionRequest($subscriptionRequest);
    }
    /**
     * Get commonRequest value
     * @return \Restoore\SystempayWebservice\StructType\CommonRequest|null
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }
    /**
     * Set commonRequest value
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @return \Restoore\SystempayWebservice\StructType\UpdateSubscription
     */
    public function setCommonRequest(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }
    /**
     * Get queryRequest value
     * @return \Restoore\SystempayWebservice\StructType\QueryRequest|null
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }
    /**
     * Set queryRequest value
     * @param \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest
     * @return \Restoore\SystempayWebservice\StructType\UpdateSubscription
     */
    public function setQueryRequest(\Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest = null)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }
    /**
     * Get subscriptionRequest value
     * @return \Restoore\SystempayWebservice\StructType\SubscriptionRequest|null
     */
    public function getSubscriptionRequest()
    {
        return $this->subscriptionRequest;
    }
    /**
     * Set subscriptionRequest value
     * @param \Restoore\SystempayWebservice\StructType\SubscriptionRequest $subscriptionRequest
     * @return \Restoore\SystempayWebservice\StructType\UpdateSubscription
     */
    public function setSubscriptionRequest(\Restoore\SystempayWebservice\StructType\SubscriptionRequest $subscriptionRequest = null)
    {
        $this->subscriptionRequest = $subscriptionRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\UpdateSubscription
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
