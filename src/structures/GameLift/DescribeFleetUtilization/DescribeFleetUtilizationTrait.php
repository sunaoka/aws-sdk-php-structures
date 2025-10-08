<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetUtilization;

trait DescribeFleetUtilizationTrait
{
    /**
     * @param DescribeFleetUtilizationRequest $args
     * @return DescribeFleetUtilizationResponse
     */
    public function describeFleetUtilization(DescribeFleetUtilizationRequest $args)
    {
        $result = parent::describeFleetUtilization($args->toArray());
        return new DescribeFleetUtilizationResponse($result->toArray());
    }
}
