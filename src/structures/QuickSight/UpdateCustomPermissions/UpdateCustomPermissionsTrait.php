<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateCustomPermissions;

trait UpdateCustomPermissionsTrait
{
    /**
     * @param UpdateCustomPermissionsRequest $args
     * @return UpdateCustomPermissionsResponse
     */
    public function updateCustomPermissions(UpdateCustomPermissionsRequest $args)
    {
        $result = parent::updateCustomPermissions($args->toArray());
        return new UpdateCustomPermissionsResponse($result->toArray());
    }
}
