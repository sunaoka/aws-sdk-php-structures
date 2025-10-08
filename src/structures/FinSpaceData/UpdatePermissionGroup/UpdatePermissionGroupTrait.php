<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdatePermissionGroup;

trait UpdatePermissionGroupTrait
{
    /**
     * @param UpdatePermissionGroupRequest $args
     * @return UpdatePermissionGroupResponse
     */
    public function updatePermissionGroup(UpdatePermissionGroupRequest $args)
    {
        $result = parent::updatePermissionGroup($args->toArray());
        return new UpdatePermissionGroupResponse($result->toArray());
    }
}
