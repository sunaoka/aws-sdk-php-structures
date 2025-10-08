<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\DisassociateUserFromPermissionGroup;

trait DisassociateUserFromPermissionGroupTrait
{
    /**
     * @param DisassociateUserFromPermissionGroupRequest $args
     * @return DisassociateUserFromPermissionGroupResponse
     */
    public function disassociateUserFromPermissionGroup(DisassociateUserFromPermissionGroupRequest $args)
    {
        $result = parent::disassociateUserFromPermissionGroup($args->toArray());
        return new DisassociateUserFromPermissionGroupResponse($result->toArray());
    }
}
