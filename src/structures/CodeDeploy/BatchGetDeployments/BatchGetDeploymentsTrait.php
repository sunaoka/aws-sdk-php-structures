<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeployments;

trait BatchGetDeploymentsTrait
{
    /**
     * @param BatchGetDeploymentsRequest $args
     * @return BatchGetDeploymentsResponse
     */
    public function batchGetDeployments(BatchGetDeploymentsRequest $args)
    {
        $result = parent::batchGetDeployments($args->toArray());
        return new BatchGetDeploymentsResponse($result->toArray());
    }
}
