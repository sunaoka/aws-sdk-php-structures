<?php

namespace Sunaoka\Aws\Structures\Iam\CreateRole;

trait CreateRoleTrait
{
    /**
     * @param CreateRoleRequest $args
     * @return CreateRoleResponse
     */
    public function createRole(CreateRoleRequest $args)
    {
        $result = parent::createRole($args->toArray());
        return new CreateRoleResponse($result->toArray());
    }
}
