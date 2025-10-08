<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdatePermissions;

trait UpdatePermissionsTrait
{
    /**
     * @param UpdatePermissionsRequest $args
     * @return UpdatePermissionsResponse
     */
    public function updatePermissions(UpdatePermissionsRequest $args)
    {
        $result = parent::updatePermissions($args->toArray());
        return new UpdatePermissionsResponse($result->toArray());
    }
}
