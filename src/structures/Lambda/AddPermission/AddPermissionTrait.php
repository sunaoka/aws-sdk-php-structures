<?php

namespace Sunaoka\Aws\Structures\Lambda\AddPermission;

trait AddPermissionTrait
{
    /**
     * @param AddPermissionRequest $args
     * @return AddPermissionResponse
     */
    public function addPermission(AddPermissionRequest $args)
    {
        $result = parent::addPermission($args->toArray());
        return new AddPermissionResponse($result->toArray());
    }
}
