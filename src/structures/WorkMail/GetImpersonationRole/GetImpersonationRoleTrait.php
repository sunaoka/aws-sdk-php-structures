<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRole;

trait GetImpersonationRoleTrait
{
    /**
     * @param GetImpersonationRoleRequest $args
     * @return GetImpersonationRoleResponse
     */
    public function getImpersonationRole(GetImpersonationRoleRequest $args)
    {
        $result = parent::getImpersonationRole($args->toArray());
        return new GetImpersonationRoleResponse($result->toArray());
    }
}
