<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceLinkedRole;

trait CreateServiceLinkedRoleTrait
{
    /**
     * @param CreateServiceLinkedRoleRequest $args
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole(CreateServiceLinkedRoleRequest $args)
    {
        $result = parent::createServiceLinkedRole($args->toArray());
        return new CreateServiceLinkedRoleResponse($result->toArray());
    }
}
