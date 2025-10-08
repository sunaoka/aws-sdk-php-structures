<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments;

trait DescribeServiceDeploymentsTrait
{
    /**
     * @param DescribeServiceDeploymentsRequest $args
     * @return DescribeServiceDeploymentsResponse
     */
    public function describeServiceDeployments(DescribeServiceDeploymentsRequest $args)
    {
        $result = parent::describeServiceDeployments($args->toArray());
        return new DescribeServiceDeploymentsResponse($result->toArray());
    }
}
