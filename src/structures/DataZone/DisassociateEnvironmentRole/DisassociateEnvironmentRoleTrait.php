<?php

namespace Sunaoka\Aws\Structures\DataZone\DisassociateEnvironmentRole;

trait DisassociateEnvironmentRoleTrait
{
    /**
     * @param DisassociateEnvironmentRoleRequest $args
     * @return DisassociateEnvironmentRoleResponse
     */
    public function disassociateEnvironmentRole(DisassociateEnvironmentRoleRequest $args)
    {
        $result = parent::disassociateEnvironmentRole($args->toArray());
        return new DisassociateEnvironmentRoleResponse($result->toArray());
    }
}
