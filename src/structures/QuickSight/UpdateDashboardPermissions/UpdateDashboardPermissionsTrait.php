<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardPermissions;

trait UpdateDashboardPermissionsTrait
{
    /**
     * @param UpdateDashboardPermissionsRequest $args
     * @return UpdateDashboardPermissionsResponse
     */
    public function updateDashboardPermissions(UpdateDashboardPermissionsRequest $args)
    {
        $result = parent::updateDashboardPermissions($args->toArray());
        return new UpdateDashboardPermissionsResponse($result->toArray());
    }
}
