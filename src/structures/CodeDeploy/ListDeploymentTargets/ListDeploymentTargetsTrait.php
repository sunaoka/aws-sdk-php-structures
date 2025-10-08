<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentTargets;

trait ListDeploymentTargetsTrait
{
    /**
     * @param ListDeploymentTargetsRequest $args
     * @return ListDeploymentTargetsResponse
     */
    public function listDeploymentTargets(ListDeploymentTargetsRequest $args)
    {
        $result = parent::listDeploymentTargets($args->toArray());
        return new ListDeploymentTargetsResponse($result->toArray());
    }
}
