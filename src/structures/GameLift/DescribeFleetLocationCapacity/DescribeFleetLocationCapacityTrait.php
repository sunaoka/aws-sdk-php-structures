<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationCapacity;

trait DescribeFleetLocationCapacityTrait
{
    /**
     * @param DescribeFleetLocationCapacityRequest $args
     * @return DescribeFleetLocationCapacityResponse
     */
    public function describeFleetLocationCapacity(DescribeFleetLocationCapacityRequest $args)
    {
        $result = parent::describeFleetLocationCapacity($args->toArray());
        return new DescribeFleetLocationCapacityResponse($result->toArray());
    }
}
