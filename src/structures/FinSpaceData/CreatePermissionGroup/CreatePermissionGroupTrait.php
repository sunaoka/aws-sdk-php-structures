<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreatePermissionGroup;

trait CreatePermissionGroupTrait
{
    /**
     * @param CreatePermissionGroupRequest $args
     * @return CreatePermissionGroupResponse
     */
    public function createPermissionGroup(CreatePermissionGroupRequest $args)
    {
        $result = parent::createPermissionGroup($args->toArray());
        return new CreatePermissionGroupResponse($result->toArray());
    }
}
