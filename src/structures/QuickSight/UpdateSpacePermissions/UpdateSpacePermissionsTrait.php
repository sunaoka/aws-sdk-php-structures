<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSpacePermissions;

trait UpdateSpacePermissionsTrait
{
    /**
     * @param UpdateSpacePermissionsRequest $args
     * @return UpdateSpacePermissionsResponse
     */
    public function updateSpacePermissions(UpdateSpacePermissionsRequest $args)
    {
        $result = parent::updateSpacePermissions($args->toArray());
        return new UpdateSpacePermissionsResponse($result->toArray());
    }
}
