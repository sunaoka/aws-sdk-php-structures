<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseReservedInstancesOffering;

trait PurchaseReservedInstancesOfferingTrait
{
    /**
     * @param PurchaseReservedInstancesOfferingRequest $args
     * @return PurchaseReservedInstancesOfferingResponse
     */
    public function purchaseReservedInstancesOffering(PurchaseReservedInstancesOfferingRequest $args)
    {
        $result = parent::purchaseReservedInstancesOffering($args->toArray());
        return new PurchaseReservedInstancesOfferingResponse($result->toArray());
    }
}
