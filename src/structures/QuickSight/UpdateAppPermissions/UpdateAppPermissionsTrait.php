<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAppPermissions;

trait UpdateAppPermissionsTrait
{
    /**
     * @param UpdateAppPermissionsRequest $args
     * @return UpdateAppPermissionsResponse
     */
    public function updateAppPermissions(UpdateAppPermissionsRequest $args)
    {
        $result = parent::updateAppPermissions($args->toArray());
        return new UpdateAppPermissionsResponse($result->toArray());
    }
}
