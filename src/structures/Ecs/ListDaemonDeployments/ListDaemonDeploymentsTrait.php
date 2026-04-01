<?php

namespace Sunaoka\Aws\Structures\Ecs\ListDaemonDeployments;

trait ListDaemonDeploymentsTrait
{
    /**
     * @param ListDaemonDeploymentsRequest $args
     * @return ListDaemonDeploymentsResponse
     */
    public function listDaemonDeployments(ListDaemonDeploymentsRequest $args)
    {
        $result = parent::listDaemonDeployments($args->toArray());
        return new ListDaemonDeploymentsResponse($result->toArray());
    }
}
