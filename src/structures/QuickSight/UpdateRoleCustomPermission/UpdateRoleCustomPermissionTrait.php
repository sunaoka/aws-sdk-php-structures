<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateRoleCustomPermission;

trait UpdateRoleCustomPermissionTrait
{
    /**
     * @param UpdateRoleCustomPermissionRequest $args
     * @return UpdateRoleCustomPermissionResponse
     */
    public function updateRoleCustomPermission(UpdateRoleCustomPermissionRequest $args)
    {
        $result = parent::updateRoleCustomPermission($args->toArray());
        return new UpdateRoleCustomPermissionResponse($result->toArray());
    }
}
