<?php

namespace Sunaoka\Aws\Structures\Repostspace\BatchRemoveRole;

trait BatchRemoveRoleTrait
{
    /**
     * @param BatchRemoveRoleRequest $args
     * @return BatchRemoveRoleResponse
     */
    public function batchRemoveRole(BatchRemoveRoleRequest $args)
    {
        $result = parent::batchRemoveRole($args->toArray());
        return new BatchRemoveRoleResponse($result->toArray());
    }
}
