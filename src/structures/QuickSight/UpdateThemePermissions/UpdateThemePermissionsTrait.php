<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateThemePermissions;

trait UpdateThemePermissionsTrait
{
    /**
     * @param UpdateThemePermissionsRequest $args
     * @return UpdateThemePermissionsResponse
     */
    public function updateThemePermissions(UpdateThemePermissionsRequest $args)
    {
        $result = parent::updateThemePermissions($args->toArray());
        return new UpdateThemePermissionsResponse($result->toArray());
    }
}
