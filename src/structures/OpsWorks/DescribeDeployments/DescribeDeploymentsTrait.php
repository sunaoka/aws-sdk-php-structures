<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeDeployments;

trait DescribeDeploymentsTrait
{
    /**
     * @param DescribeDeploymentsRequest $args
     * @return DescribeDeploymentsResponse
     */
    public function describeDeployments(DescribeDeploymentsRequest $args)
    {
        $result = parent::describeDeployments($args->toArray());
        return new DescribeDeploymentsResponse($result->toArray());
    }
}
