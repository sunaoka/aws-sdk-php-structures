<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteDeploymentGroup;

trait DeleteDeploymentGroupTrait
{
    /**
     * @param DeleteDeploymentGroupRequest $args
     * @return DeleteDeploymentGroupResponse
     */
    public function deleteDeploymentGroup(DeleteDeploymentGroupRequest $args)
    {
        $result = parent::deleteDeploymentGroup($args->toArray());
        return new DeleteDeploymentGroupResponse($result->toArray());
    }
}
