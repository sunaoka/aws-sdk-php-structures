<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListUsersByPermissionGroup;

trait ListUsersByPermissionGroupTrait
{
    /**
     * @param ListUsersByPermissionGroupRequest $args
     * @return ListUsersByPermissionGroupResponse
     */
    public function listUsersByPermissionGroup(ListUsersByPermissionGroupRequest $args)
    {
        $result = parent::listUsersByPermissionGroup($args->toArray());
        return new ListUsersByPermissionGroupResponse($result->toArray());
    }
}
