<?php

namespace Sunaoka\Aws\Structures\Iam\ListRoles;

trait ListRolesTrait
{
    /**
     * @param ListRolesRequest $args
     * @return ListRolesResponse
     */
    public function listRoles(ListRolesRequest $args)
    {
        $result = parent::listRoles($args->toArray());
        return new ListRolesResponse($result->toArray());
    }
}
