<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccountCustomPermission;

trait UpdateAccountCustomPermissionTrait
{
    /**
     * @param UpdateAccountCustomPermissionRequest $args
     * @return UpdateAccountCustomPermissionResponse
     */
    public function updateAccountCustomPermission(UpdateAccountCustomPermissionRequest $args)
    {
        $result = parent::updateAccountCustomPermission($args->toArray());
        return new UpdateAccountCustomPermissionResponse($result->toArray());
    }
}
