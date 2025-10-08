<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateImpersonationRole;

trait CreateImpersonationRoleTrait
{
    /**
     * @param CreateImpersonationRoleRequest $args
     * @return CreateImpersonationRoleResponse
     */
    public function createImpersonationRole(CreateImpersonationRoleRequest $args)
    {
        $result = parent::createImpersonationRole($args->toArray());
        return new CreateImpersonationRoleResponse($result->toArray());
    }
}
