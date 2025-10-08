<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListCustomModelDeployments;

trait ListCustomModelDeploymentsTrait
{
    /**
     * @param ListCustomModelDeploymentsRequest $args
     * @return ListCustomModelDeploymentsResponse
     */
    public function listCustomModelDeployments(ListCustomModelDeploymentsRequest $args)
    {
        $result = parent::listCustomModelDeployments($args->toArray());
        return new ListCustomModelDeploymentsResponse($result->toArray());
    }
}
