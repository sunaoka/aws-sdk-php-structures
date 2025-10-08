<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroupsByUser;

trait ListPermissionGroupsByUserTrait
{
    /**
     * @param ListPermissionGroupsByUserRequest $args
     * @return ListPermissionGroupsByUserResponse
     */
    public function listPermissionGroupsByUser(ListPermissionGroupsByUserRequest $args)
    {
        $result = parent::listPermissionGroupsByUser($args->toArray());
        return new ListPermissionGroupsByUserResponse($result->toArray());
    }
}
