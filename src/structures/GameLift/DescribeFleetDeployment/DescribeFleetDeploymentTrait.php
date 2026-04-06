<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetDeployment;

trait DescribeFleetDeploymentTrait
{
    /**
     * @param DescribeFleetDeploymentRequest $args
     * @return DescribeFleetDeploymentResponse
     */
    public function describeFleetDeployment(DescribeFleetDeploymentRequest $args)
    {
        $result = parent::describeFleetDeployment($args->toArray());
        return new DescribeFleetDeploymentResponse($result->toArray());
    }
}
