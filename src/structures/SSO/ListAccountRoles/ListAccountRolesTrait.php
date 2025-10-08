<?php

namespace Sunaoka\Aws\Structures\SSO\ListAccountRoles;

trait ListAccountRolesTrait
{
    /**
     * @param ListAccountRolesRequest $args
     * @return ListAccountRolesResponse
     */
    public function listAccountRoles(ListAccountRolesRequest $args)
    {
        $result = parent::listAccountRoles($args->toArray());
        return new ListAccountRolesResponse($result->toArray());
    }
}
