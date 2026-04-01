<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonDeployments;

trait DescribeDaemonDeploymentsTrait
{
    /**
     * @param DescribeDaemonDeploymentsRequest $args
     * @return DescribeDaemonDeploymentsResponse
     */
    public function describeDaemonDeployments(DescribeDaemonDeploymentsRequest $args)
    {
        $result = parent::describeDaemonDeployments($args->toArray());
        return new DescribeDaemonDeploymentsResponse($result->toArray());
    }
}
