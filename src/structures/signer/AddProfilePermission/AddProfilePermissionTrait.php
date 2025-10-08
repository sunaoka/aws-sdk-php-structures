<?php

namespace Sunaoka\Aws\Structures\signer\AddProfilePermission;

trait AddProfilePermissionTrait
{
    /**
     * @param AddProfilePermissionRequest $args
     * @return AddProfilePermissionResponse
     */
    public function addProfilePermission(AddProfilePermissionRequest $args)
    {
        $result = parent::addProfilePermission($args->toArray());
        return new AddProfilePermissionResponse($result->toArray());
    }
}
