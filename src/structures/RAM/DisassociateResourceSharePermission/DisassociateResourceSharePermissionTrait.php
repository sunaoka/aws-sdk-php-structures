<?php

namespace Sunaoka\Aws\Structures\RAM\DisassociateResourceSharePermission;

trait DisassociateResourceSharePermissionTrait
{
    /**
     * @param DisassociateResourceSharePermissionRequest $args
     * @return DisassociateResourceSharePermissionResponse
     */
    public function disassociateResourceSharePermission(DisassociateResourceSharePermissionRequest $args)
    {
        $result = parent::disassociateResourceSharePermission($args->toArray());
        return new DisassociateResourceSharePermissionResponse($result->toArray());
    }
}
