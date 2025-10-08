<?php

namespace Sunaoka\Aws\Structures\RAM\GetPermission;

trait GetPermissionTrait
{
    /**
     * @param GetPermissionRequest $args
     * @return GetPermissionResponse
     */
    public function getPermission(GetPermissionRequest $args)
    {
        $result = parent::getPermission($args->toArray());
        return new GetPermissionResponse($result->toArray());
    }
}
