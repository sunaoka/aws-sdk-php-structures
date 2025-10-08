<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetCapacity;

trait DescribeFleetCapacityTrait
{
    /**
     * @param DescribeFleetCapacityRequest $args
     * @return DescribeFleetCapacityResponse
     */
    public function describeFleetCapacity(DescribeFleetCapacityRequest $args)
    {
        $result = parent::describeFleetCapacity($args->toArray());
        return new DescribeFleetCapacityResponse($result->toArray());
    }
}
