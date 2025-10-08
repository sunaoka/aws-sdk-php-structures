<?php

namespace Sunaoka\Aws\Structures\Glacier\PurchaseProvisionedCapacity;

trait PurchaseProvisionedCapacityTrait
{
    /**
     * @param PurchaseProvisionedCapacityRequest $args
     * @return PurchaseProvisionedCapacityResponse
     */
    public function purchaseProvisionedCapacity(PurchaseProvisionedCapacityRequest $args)
    {
        $result = parent::purchaseProvisionedCapacity($args->toArray());
        return new PurchaseProvisionedCapacityResponse($result->toArray());
    }
}
