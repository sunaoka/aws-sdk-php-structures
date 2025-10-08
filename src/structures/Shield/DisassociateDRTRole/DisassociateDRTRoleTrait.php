<?php

namespace Sunaoka\Aws\Structures\Shield\DisassociateDRTRole;

trait DisassociateDRTRoleTrait
{
    /**
     * @param DisassociateDRTRoleRequest $args
     * @return DisassociateDRTRoleResponse
     */
    public function disassociateDRTRole(DisassociateDRTRoleRequest $args)
    {
        $result = parent::disassociateDRTRole($args->toArray());
        return new DisassociateDRTRoleResponse($result->toArray());
    }
}
