<?php

namespace Sunaoka\Aws\Structures\SsmSap\DeleteResourcePermission;

trait DeleteResourcePermissionTrait
{
    /**
     * @param DeleteResourcePermissionRequest $args
     * @return DeleteResourcePermissionResponse
     */
    public function deleteResourcePermission(DeleteResourcePermissionRequest $args)
    {
        $result = parent::deleteResourcePermission($args->toArray());
        return new DeleteResourcePermissionResponse($result->toArray());
    }
}
