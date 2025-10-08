<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListImpersonationRoles;

trait ListImpersonationRolesTrait
{
    /**
     * @param ListImpersonationRolesRequest $args
     * @return ListImpersonationRolesResponse
     */
    public function listImpersonationRoles(ListImpersonationRolesRequest $args)
    {
        $result = parent::listImpersonationRoles($args->toArray());
        return new ListImpersonationRolesResponse($result->toArray());
    }
}
