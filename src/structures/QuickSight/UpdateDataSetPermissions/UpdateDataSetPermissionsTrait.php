<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSetPermissions;

trait UpdateDataSetPermissionsTrait
{
    /**
     * @param UpdateDataSetPermissionsRequest $args
     * @return UpdateDataSetPermissionsResponse
     */
    public function updateDataSetPermissions(UpdateDataSetPermissionsRequest $args)
    {
        $result = parent::updateDataSetPermissions($args->toArray());
        return new UpdateDataSetPermissionsResponse($result->toArray());
    }
}
