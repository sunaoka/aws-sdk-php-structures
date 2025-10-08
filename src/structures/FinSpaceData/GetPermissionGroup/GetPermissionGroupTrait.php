<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetPermissionGroup;

trait GetPermissionGroupTrait
{
    /**
     * @param GetPermissionGroupRequest $args
     * @return GetPermissionGroupResponse
     */
    public function getPermissionGroup(GetPermissionGroupRequest $args)
    {
        $result = parent::getPermissionGroup($args->toArray());
        return new GetPermissionGroupResponse($result->toArray());
    }
}
