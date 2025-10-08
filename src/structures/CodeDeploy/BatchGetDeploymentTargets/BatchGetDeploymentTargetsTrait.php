<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentTargets;

trait BatchGetDeploymentTargetsTrait
{
    /**
     * @param BatchGetDeploymentTargetsRequest $args
     * @return BatchGetDeploymentTargetsResponse
     */
    public function batchGetDeploymentTargets(BatchGetDeploymentTargetsRequest $args)
    {
        $result = parent::batchGetDeploymentTargets($args->toArray());
        return new BatchGetDeploymentTargetsResponse($result->toArray());
    }
}
