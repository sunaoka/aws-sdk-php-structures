<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateRole;

trait UpdateRoleTrait
{
    /**
     * @param UpdateRoleRequest $args
     * @return UpdateRoleResponse
     */
    public function updateRole(UpdateRoleRequest $args)
    {
        $result = parent::updateRole($args->toArray());
        return new UpdateRoleResponse($result->toArray());
    }
}
