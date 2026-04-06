<?php

namespace Sunaoka\Aws\Structures\Repostspace\BatchAddRole;

trait BatchAddRoleTrait
{
    /**
     * @param BatchAddRoleRequest $args
     * @return BatchAddRoleResponse
     */
    public function batchAddRole(BatchAddRoleRequest $args)
    {
        $result = parent::batchAddRole($args->toArray());
        return new BatchAddRoleResponse($result->toArray());
    }
}
