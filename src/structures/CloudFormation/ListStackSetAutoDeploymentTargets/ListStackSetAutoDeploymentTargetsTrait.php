<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetAutoDeploymentTargets;

trait ListStackSetAutoDeploymentTargetsTrait
{
    /**
     * @param ListStackSetAutoDeploymentTargetsRequest $args
     * @return ListStackSetAutoDeploymentTargetsResponse
     */
    public function listStackSetAutoDeploymentTargets(ListStackSetAutoDeploymentTargetsRequest $args)
    {
        $result = parent::listStackSetAutoDeploymentTargets($args->toArray());
        return new ListStackSetAutoDeploymentTargetsResponse($result->toArray());
    }
}
