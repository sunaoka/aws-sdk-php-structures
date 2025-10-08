<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteUserCustomPermission;

trait DeleteUserCustomPermissionTrait
{
    /**
     * @param DeleteUserCustomPermissionRequest $args
     * @return DeleteUserCustomPermissionResponse
     */
    public function deleteUserCustomPermission(DeleteUserCustomPermissionRequest $args)
    {
        $result = parent::deleteUserCustomPermission($args->toArray());
        return new DeleteUserCustomPermissionResponse($result->toArray());
    }
}
