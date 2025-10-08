<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDeployments;

trait GetDeploymentsTrait
{
    /**
     * @param GetDeploymentsRequest $args
     * @return GetDeploymentsResponse
     */
    public function getDeployments(GetDeploymentsRequest $args)
    {
        $result = parent::getDeployments($args->toArray());
        return new GetDeploymentsResponse($result->toArray());
    }
}
