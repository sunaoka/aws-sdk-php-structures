<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateManagedInstanceRole;

trait UpdateManagedInstanceRoleTrait
{
    /**
     * @param UpdateManagedInstanceRoleRequest $args
     * @return UpdateManagedInstanceRoleResponse
     */
    public function updateManagedInstanceRole(UpdateManagedInstanceRoleRequest $args)
    {
        $result = parent::updateManagedInstanceRole($args->toArray());
        return new UpdateManagedInstanceRoleResponse($result->toArray());
    }
}
