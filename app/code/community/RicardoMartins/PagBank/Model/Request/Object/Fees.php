<?php

class RicardoMartins_PagBank_Model_Request_Object_Fees extends Varien_Object implements RicardoMartins_PagBank_Api_Connect_FeesInterface
{
    /**
     * @return string
     */
    public function getBuyer()
    {
        return $this->getData(RicardoMartins_PagBank_Api_Connect_FeesInterface::BUYER);
    }

    /**
     * @param RicardoMartins_PagBank_Api_Connect_BuyerInterface $buyer
     * @return RicardoMartins_PagBank_Api_Connect_BuyerInterface
     */
    public function setBuyer($buyer)
    {
        return $this->setData(RicardoMartins_PagBank_Api_Connect_FeesInterface::BUYER, $buyer);
    }
}
