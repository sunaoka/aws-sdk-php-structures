<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetAssociatedRole;

trait GetAssociatedRoleTrait
{
    /**
     * @param GetAssociatedRoleRequest $args
     * @return GetAssociatedRoleResponse
     */
    public function getAssociatedRole(GetAssociatedRoleRequest $args)
    {
        $result = parent::getAssociatedRole($args->toArray());
        return new GetAssociatedRoleResponse($result->toArray());
    }
}
