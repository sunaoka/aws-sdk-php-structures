<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteRoleCustomPermission;

trait DeleteRoleCustomPermissionTrait
{
    /**
     * @param DeleteRoleCustomPermissionRequest $args
     * @return DeleteRoleCustomPermissionResponse
     */
    public function deleteRoleCustomPermission(DeleteRoleCustomPermissionRequest $args)
    {
        $result = parent::deleteRoleCustomPermission($args->toArray());
        return new DeleteRoleCustomPermissionResponse($result->toArray());
    }
}
