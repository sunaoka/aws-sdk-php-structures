<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseScheduledInstances;

trait PurchaseScheduledInstancesTrait
{
    /**
     * @param PurchaseScheduledInstancesRequest $args
     * @return PurchaseScheduledInstancesResponse
     */
    public function purchaseScheduledInstances(PurchaseScheduledInstancesRequest $args)
    {
        $result = parent::purchaseScheduledInstances($args->toArray());
        return new PurchaseScheduledInstancesResponse($result->toArray());
    }
}
