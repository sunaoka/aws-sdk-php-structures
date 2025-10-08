<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetLocationUtilization;

trait DescribeFleetLocationUtilizationTrait
{
    /**
     * @param DescribeFleetLocationUtilizationRequest $args
     * @return DescribeFleetLocationUtilizationResponse
     */
    public function describeFleetLocationUtilization(DescribeFleetLocationUtilizationRequest $args)
    {
        $result = parent::describeFleetLocationUtilization($args->toArray());
        return new DescribeFleetLocationUtilizationResponse($result->toArray());
    }
}
