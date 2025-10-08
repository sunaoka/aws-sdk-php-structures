<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\DeletePermissionGroup;

trait DeletePermissionGroupTrait
{
    /**
     * @param DeletePermissionGroupRequest $args
     * @return DeletePermissionGroupResponse
     */
    public function deletePermissionGroup(DeletePermissionGroupRequest $args)
    {
        $result = parent::deletePermissionGroup($args->toArray());
        return new DeletePermissionGroupResponse($result->toArray());
    }
}
