<?php

namespace Sunaoka\Aws\Structures\Glacier\ListProvisionedCapacity;

trait ListProvisionedCapacityTrait
{
    /**
     * @param ListProvisionedCapacityRequest $args
     * @return ListProvisionedCapacityResponse
     */
    public function listProvisionedCapacity(ListProvisionedCapacityRequest $args)
    {
        $result = parent::listProvisionedCapacity($args->toArray());
        return new ListProvisionedCapacityResponse($result->toArray());
    }
}
