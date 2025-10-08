<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyCurrentDBClusterCapacity;

trait ModifyCurrentDBClusterCapacityTrait
{
    /**
     * @param ModifyCurrentDBClusterCapacityRequest $args
     * @return ModifyCurrentDBClusterCapacityResponse
     */
    public function modifyCurrentDBClusterCapacity(ModifyCurrentDBClusterCapacityRequest $args)
    {
        $result = parent::modifyCurrentDBClusterCapacity($args->toArray());
        return new ModifyCurrentDBClusterCapacityResponse($result->toArray());
    }
}
