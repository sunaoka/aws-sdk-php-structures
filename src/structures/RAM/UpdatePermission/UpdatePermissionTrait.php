<?php

namespace Sunaoka\Aws\Structures\RAM\UpdatePermission;

trait UpdatePermissionTrait
{
    /**
     * @param UpdatePermissionRequest $args
     * @return UpdatePermissionResponse
     */
    public function updatePermission(UpdatePermissionRequest $args)
    {
        $result = parent::updatePermission($args->toArray());
        return new UpdatePermissionResponse($result->toArray());
    }
}
