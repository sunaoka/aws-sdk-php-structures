<?php

namespace Sunaoka\Aws\Structures\QBusiness\DisassociatePermission;

trait DisassociatePermissionTrait
{
    /**
     * @param DisassociatePermissionRequest $args
     * @return DisassociatePermissionResponse
     */
    public function disassociatePermission(DisassociatePermissionRequest $args)
    {
        $result = parent::disassociatePermission($args->toArray());
        return new DisassociatePermissionResponse($result->toArray());
    }
}
