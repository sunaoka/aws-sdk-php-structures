<?php

namespace Sunaoka\Aws\Structures\Rds\PurchaseReservedDBInstancesOffering;

trait PurchaseReservedDBInstancesOfferingTrait
{
    /**
     * @param PurchaseReservedDBInstancesOfferingRequest $args
     * @return PurchaseReservedDBInstancesOfferingResponse
     */
    public function purchaseReservedDBInstancesOffering(PurchaseReservedDBInstancesOfferingRequest $args)
    {
        $result = parent::purchaseReservedDBInstancesOffering($args->toArray());
        return new PurchaseReservedDBInstancesOfferingResponse($result->toArray());
    }
}
