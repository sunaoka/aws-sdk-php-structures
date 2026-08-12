<?php

namespace Sunaoka\Aws\Structures\Iam\AcquireRole;

trait AcquireRoleTrait
{
    /**
     * @param AcquireRoleRequest $args
     * @return AcquireRoleResponse
     */
    public function acquireRole(AcquireRoleRequest $args)
    {
        $result = parent::acquireRole($args->toArray());
        return new AcquireRoleResponse($result->toArray());
    }
}
