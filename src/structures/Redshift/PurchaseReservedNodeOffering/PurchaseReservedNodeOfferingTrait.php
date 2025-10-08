<?php

namespace Sunaoka\Aws\Structures\Redshift\PurchaseReservedNodeOffering;

trait PurchaseReservedNodeOfferingTrait
{
    /**
     * @param PurchaseReservedNodeOfferingRequest $args
     * @return PurchaseReservedNodeOfferingResponse
     */
    public function purchaseReservedNodeOffering(PurchaseReservedNodeOfferingRequest $args)
    {
        $result = parent::purchaseReservedNodeOffering($args->toArray());
        return new PurchaseReservedNodeOfferingResponse($result->toArray());
    }
}
