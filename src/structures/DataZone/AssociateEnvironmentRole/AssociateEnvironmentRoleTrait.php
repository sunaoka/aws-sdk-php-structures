<?php

namespace Sunaoka\Aws\Structures\DataZone\AssociateEnvironmentRole;

trait AssociateEnvironmentRoleTrait
{
    /**
     * @param AssociateEnvironmentRoleRequest $args
     * @return AssociateEnvironmentRoleResponse
     */
    public function associateEnvironmentRole(AssociateEnvironmentRoleRequest $args)
    {
        $result = parent::associateEnvironmentRole($args->toArray());
        return new AssociateEnvironmentRoleResponse($result->toArray());
    }
}
