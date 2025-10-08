<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\PurchaseReservedInstanceOffering;

trait PurchaseReservedInstanceOfferingTrait
{
    /**
     * @param PurchaseReservedInstanceOfferingRequest $args
     * @return PurchaseReservedInstanceOfferingResponse
     */
    public function purchaseReservedInstanceOffering(PurchaseReservedInstanceOfferingRequest $args)
    {
        $result = parent::purchaseReservedInstanceOffering($args->toArray());
        return new PurchaseReservedInstanceOfferingResponse($result->toArray());
    }
}
