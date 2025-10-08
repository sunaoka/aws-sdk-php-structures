<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyReservedInstances;

trait ModifyReservedInstancesTrait
{
    /**
     * @param ModifyReservedInstancesRequest $args
     * @return ModifyReservedInstancesResponse
     */
    public function modifyReservedInstances(ModifyReservedInstancesRequest $args)
    {
        $result = parent::modifyReservedInstances($args->toArray());
        return new ModifyReservedInstancesResponse($result->toArray());
    }
}
