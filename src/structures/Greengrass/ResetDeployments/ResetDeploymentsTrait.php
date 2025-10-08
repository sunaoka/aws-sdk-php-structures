<?php

namespace Sunaoka\Aws\Structures\Greengrass\ResetDeployments;

trait ResetDeploymentsTrait
{
    /**
     * @param ResetDeploymentsRequest $args
     * @return ResetDeploymentsResponse
     */
    public function resetDeployments(ResetDeploymentsRequest $args)
    {
        $result = parent::resetDeployments($args->toArray());
        return new ResetDeploymentsResponse($result->toArray());
    }
}
