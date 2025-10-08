<?php

namespace Sunaoka\Aws\Structures\signer\RemoveProfilePermission;

trait RemoveProfilePermissionTrait
{
    /**
     * @param RemoveProfilePermissionRequest $args
     * @return RemoveProfilePermissionResponse
     */
    public function removeProfilePermission(RemoveProfilePermissionRequest $args)
    {
        $result = parent::removeProfilePermission($args->toArray());
        return new RemoveProfilePermissionResponse($result->toArray());
    }
}
