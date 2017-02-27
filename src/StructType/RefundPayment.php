<?php

namespace Restoore\SystempayWebservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for refundPayment StructType
 * Meta informations extracted from the WSDL
 * - type: tns:refundPayment
 * @subpackage Structs
 * @author restoore <github.com/restoore>
 * @date 2016-02-22
 * @version 1.0.0
 */
class RefundPayment extends AbstractStructBase
{
    /**
     * The commonRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\CommonRequest
     */
    public $commonRequest;
    /**
     * The paymentRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\PaymentRequest
     */
    public $paymentRequest;
    /**
     * The queryRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Restoore\SystempayWebservice\StructType\QueryRequest
     */
    public $queryRequest;
    /**
     * Constructor method for refundPayment
     * @uses RefundPayment::setCommonRequest()
     * @uses RefundPayment::setPaymentRequest()
     * @uses RefundPayment::setQueryRequest()
     * @param \Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest
     * @param \Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest
     * @param \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest
     */
    public function __construct(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null, \Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest = null, \Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest = null)
    {
        $this
            ->setCommonRequest($commonRequest)
            ->setPaymentRequest($paymentRequest)
            ->setQueryRequest($queryRequest);
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
     * @return \Restoore\SystempayWebservice\StructType\RefundPayment
     */
    public function setCommonRequest(\Restoore\SystempayWebservice\StructType\CommonRequest $commonRequest = null)
    {
        $this->commonRequest = $commonRequest;
        return $this;
    }
    /**
     * Get paymentRequest value
     * @return \Restoore\SystempayWebservice\StructType\PaymentRequest|null
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }
    /**
     * Set paymentRequest value
     * @param \Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest
     * @return \Restoore\SystempayWebservice\StructType\RefundPayment
     */
    public function setPaymentRequest(\Restoore\SystempayWebservice\StructType\PaymentRequest $paymentRequest = null)
    {
        $this->paymentRequest = $paymentRequest;
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
     * @return \Restoore\SystempayWebservice\StructType\RefundPayment
     */
    public function setQueryRequest(\Restoore\SystempayWebservice\StructType\QueryRequest $queryRequest = null)
    {
        $this->queryRequest = $queryRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Restoore\SystempayWebservice\StructType\RefundPayment
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
