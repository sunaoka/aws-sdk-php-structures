<?php

namespace Sunaoka\Aws\Structures\RAM\CreatePermission;

trait CreatePermissionTrait
{
    /**
     * @param CreatePermissionRequest $args
     * @return CreatePermissionResponse
     */
    public function createPermission(CreatePermissionRequest $args)
    {
        $result = parent::createPermission($args->toArray());
        return new CreatePermissionResponse($result->toArray());
    }
}
