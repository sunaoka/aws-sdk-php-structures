<?php

namespace Sunaoka\Aws\Structures\RAM\AssociateResourceSharePermission;

trait AssociateResourceSharePermissionTrait
{
    /**
     * @param AssociateResourceSharePermissionRequest $args
     * @return AssociateResourceSharePermissionResponse
     */
    public function associateResourceSharePermission(AssociateResourceSharePermissionRequest $args)
    {
        $result = parent::associateResourceSharePermission($args->toArray());
        return new AssociateResourceSharePermissionResponse($result->toArray());
    }
}
