<?php

namespace Sunaoka\Aws\Structures\QBusiness\AssociatePermission;

trait AssociatePermissionTrait
{
    /**
     * @param AssociatePermissionRequest $args
     * @return AssociatePermissionResponse
     */
    public function associatePermission(AssociatePermissionRequest $args)
    {
        $result = parent::associatePermission($args->toArray());
        return new AssociatePermissionResponse($result->toArray());
    }
}
