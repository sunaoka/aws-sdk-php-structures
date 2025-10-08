<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\AssociateUserToPermissionGroup;

trait AssociateUserToPermissionGroupTrait
{
    /**
     * @param AssociateUserToPermissionGroupRequest $args
     * @return AssociateUserToPermissionGroupResponse
     */
    public function associateUserToPermissionGroup(AssociateUserToPermissionGroupRequest $args)
    {
        $result = parent::associateUserToPermissionGroup($args->toArray());
        return new AssociateUserToPermissionGroupResponse($result->toArray());
    }
}
