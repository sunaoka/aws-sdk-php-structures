<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeBlueGreenDeployments;

trait DescribeBlueGreenDeploymentsTrait
{
    /**
     * @param DescribeBlueGreenDeploymentsRequest $args
     * @return DescribeBlueGreenDeploymentsResponse
     */
    public function describeBlueGreenDeployments(DescribeBlueGreenDeploymentsRequest $args)
    {
        $result = parent::describeBlueGreenDeployments($args->toArray());
        return new DescribeBlueGreenDeploymentsResponse($result->toArray());
    }
}
