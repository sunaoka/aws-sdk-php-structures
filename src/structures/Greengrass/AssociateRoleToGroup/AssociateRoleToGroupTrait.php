<?php

namespace Sunaoka\Aws\Structures\Greengrass\AssociateRoleToGroup;

trait AssociateRoleToGroupTrait
{
    /**
     * @param AssociateRoleToGroupRequest $args
     * @return AssociateRoleToGroupResponse
     */
    public function associateRoleToGroup(AssociateRoleToGroupRequest $args)
    {
        $result = parent::associateRoleToGroup($args->toArray());
        return new AssociateRoleToGroupResponse($result->toArray());
    }
}
