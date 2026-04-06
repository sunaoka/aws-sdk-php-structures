<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateUserCustomPermission;

trait UpdateUserCustomPermissionTrait
{
    /**
     * @param UpdateUserCustomPermissionRequest $args
     * @return UpdateUserCustomPermissionResponse
     */
    public function updateUserCustomPermission(UpdateUserCustomPermissionRequest $args)
    {
        $result = parent::updateUserCustomPermission($args->toArray());
        return new UpdateUserCustomPermissionResponse($result->toArray());
    }
}
