<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServiceDeployments;

trait GetContainerServiceDeploymentsTrait
{
    /**
     * @param GetContainerServiceDeploymentsRequest $args
     * @return GetContainerServiceDeploymentsResponse
     */
    public function getContainerServiceDeployments(GetContainerServiceDeploymentsRequest $args)
    {
        $result = parent::getContainerServiceDeployments($args->toArray());
        return new GetContainerServiceDeploymentsResponse($result->toArray());
    }
}
