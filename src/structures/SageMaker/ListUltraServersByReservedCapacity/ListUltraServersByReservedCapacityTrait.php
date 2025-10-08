<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListUltraServersByReservedCapacity;

trait ListUltraServersByReservedCapacityTrait
{
    /**
     * @param ListUltraServersByReservedCapacityRequest $args
     * @return ListUltraServersByReservedCapacityResponse
     */
    public function listUltraServersByReservedCapacity(ListUltraServersByReservedCapacityRequest $args)
    {
        $result = parent::listUltraServersByReservedCapacity($args->toArray());
        return new ListUltraServersByReservedCapacityResponse($result->toArray());
    }
}
