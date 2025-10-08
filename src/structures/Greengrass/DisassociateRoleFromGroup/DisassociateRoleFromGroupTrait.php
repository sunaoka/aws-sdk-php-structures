<?php

namespace Sunaoka\Aws\Structures\Greengrass\DisassociateRoleFromGroup;

trait DisassociateRoleFromGroupTrait
{
    /**
     * @param DisassociateRoleFromGroupRequest $args
     * @return DisassociateRoleFromGroupResponse
     */
    public function disassociateRoleFromGroup(DisassociateRoleFromGroupRequest $args)
    {
        $result = parent::disassociateRoleFromGroup($args->toArray());
        return new DisassociateRoleFromGroupResponse($result->toArray());
    }
}
