<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\UpdateDeploymentGroup;

trait UpdateDeploymentGroupTrait
{
    /**
     * @param UpdateDeploymentGroupRequest $args
     * @return UpdateDeploymentGroupResponse
     */
    public function updateDeploymentGroup(UpdateDeploymentGroupRequest $args)
    {
        $result = parent::updateDeploymentGroup($args->toArray());
        return new UpdateDeploymentGroupResponse($result->toArray());
    }
}
