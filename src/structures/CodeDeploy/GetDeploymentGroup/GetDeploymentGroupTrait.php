<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentGroup;

trait GetDeploymentGroupTrait
{
    /**
     * @param GetDeploymentGroupRequest $args
     * @return GetDeploymentGroupResponse
     */
    public function getDeploymentGroup(GetDeploymentGroupRequest $args)
    {
        $result = parent::getDeploymentGroup($args->toArray());
        return new GetDeploymentGroupResponse($result->toArray());
    }
}
