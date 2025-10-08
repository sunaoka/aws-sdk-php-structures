<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetResourcePermission;

trait GetResourcePermissionTrait
{
    /**
     * @param GetResourcePermissionRequest $args
     * @return GetResourcePermissionResponse
     */
    public function getResourcePermission(GetResourcePermissionRequest $args)
    {
        $result = parent::getResourcePermission($args->toArray());
        return new GetResourcePermissionResponse($result->toArray());
    }
}
