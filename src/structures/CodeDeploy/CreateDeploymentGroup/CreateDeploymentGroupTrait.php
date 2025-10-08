<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentGroup;

trait CreateDeploymentGroupTrait
{
    /**
     * @param CreateDeploymentGroupRequest $args
     * @return CreateDeploymentGroupResponse
     */
    public function createDeploymentGroup(CreateDeploymentGroupRequest $args)
    {
        $result = parent::createDeploymentGroup($args->toArray());
        return new CreateDeploymentGroupResponse($result->toArray());
    }
}
