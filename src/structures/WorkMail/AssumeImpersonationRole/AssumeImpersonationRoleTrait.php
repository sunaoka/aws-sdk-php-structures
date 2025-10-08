<?php

namespace Sunaoka\Aws\Structures\WorkMail\AssumeImpersonationRole;

trait AssumeImpersonationRoleTrait
{
    /**
     * @param AssumeImpersonationRoleRequest $args
     * @return AssumeImpersonationRoleResponse
     */
    public function assumeImpersonationRole(AssumeImpersonationRoleRequest $args)
    {
        $result = parent::assumeImpersonationRole($args->toArray());
        return new AssumeImpersonationRoleResponse($result->toArray());
    }
}
