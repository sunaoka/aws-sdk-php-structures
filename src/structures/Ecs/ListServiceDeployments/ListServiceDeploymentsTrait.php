<?php

namespace Sunaoka\Aws\Structures\Ecs\ListServiceDeployments;

trait ListServiceDeploymentsTrait
{
    /**
     * @param ListServiceDeploymentsRequest $args
     * @return ListServiceDeploymentsResponse
     */
    public function listServiceDeployments(ListServiceDeploymentsRequest $args)
    {
        $result = parent::listServiceDeployments($args->toArray());
        return new ListServiceDeploymentsResponse($result->toArray());
    }
}
