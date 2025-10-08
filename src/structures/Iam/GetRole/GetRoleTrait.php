<?php

namespace Sunaoka\Aws\Structures\Iam\GetRole;

trait GetRoleTrait
{
    /**
     * @param GetRoleRequest $args
     * @return GetRoleResponse
     */
    public function getRole(GetRoleRequest $args)
    {
        $result = parent::getRole($args->toArray());
        return new GetRoleResponse($result->toArray());
    }
}
