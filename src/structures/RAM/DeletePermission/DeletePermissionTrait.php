<?php

namespace Sunaoka\Aws\Structures\RAM\DeletePermission;

trait DeletePermissionTrait
{
    /**
     * @param DeletePermissionRequest $args
     * @return DeletePermissionResponse
     */
    public function deletePermission(DeletePermissionRequest $args)
    {
        $result = parent::deletePermission($args->toArray());
        return new DeletePermissionResponse($result->toArray());
    }
}
