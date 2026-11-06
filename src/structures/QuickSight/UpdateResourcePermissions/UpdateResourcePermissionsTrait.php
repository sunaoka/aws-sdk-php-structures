<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateResourcePermissions;

trait UpdateResourcePermissionsTrait
{
    /**
     * @param UpdateResourcePermissionsRequest $args
     * @return UpdateResourcePermissionsResponse
     */
    public function updateResourcePermissions(UpdateResourcePermissionsRequest $args)
    {
        $result = parent::updateResourcePermissions($args->toArray());
        return new UpdateResourcePermissionsResponse($result->toArray());
    }
}
