<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateFolderPermissions;

trait UpdateFolderPermissionsTrait
{
    /**
     * @param UpdateFolderPermissionsRequest $args
     * @return UpdateFolderPermissionsResponse
     */
    public function updateFolderPermissions(UpdateFolderPermissionsRequest $args)
    {
        $result = parent::updateFolderPermissions($args->toArray());
        return new UpdateFolderPermissionsResponse($result->toArray());
    }
}
