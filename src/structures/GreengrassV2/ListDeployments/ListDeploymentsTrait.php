<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ListDeployments;

trait ListDeploymentsTrait
{
    /**
     * @param ListDeploymentsRequest $args
     * @return ListDeploymentsResponse
     */
    public function listDeployments(ListDeploymentsRequest $args)
    {
        $result = parent::listDeployments($args->toArray());
        return new ListDeploymentsResponse($result->toArray());
    }
}
