<?php

namespace Sunaoka\Aws\Structures\Shield\AssociateDRTRole;

trait AssociateDRTRoleTrait
{
    /**
     * @param AssociateDRTRoleRequest $args
     * @return AssociateDRTRoleResponse
     */
    public function associateDRTRole(AssociateDRTRoleRequest $args)
    {
        $result = parent::associateDRTRole($args->toArray());
        return new AssociateDRTRoleResponse($result->toArray());
    }
}
