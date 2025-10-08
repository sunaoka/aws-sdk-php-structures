<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSourcePermissions;

trait UpdateDataSourcePermissionsTrait
{
    /**
     * @param UpdateDataSourcePermissionsRequest $args
     * @return UpdateDataSourcePermissionsResponse
     */
    public function updateDataSourcePermissions(UpdateDataSourcePermissionsRequest $args)
    {
        $result = parent::updateDataSourcePermissions($args->toArray());
        return new UpdateDataSourcePermissionsResponse($result->toArray());
    }
}
