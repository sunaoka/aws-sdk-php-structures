<?php

namespace Sunaoka\Aws\Structures\Odb\DisassociateIamRoleFromResource;

trait DisassociateIamRoleFromResourceTrait
{
    /**
     * @param DisassociateIamRoleFromResourceRequest $args
     * @return DisassociateIamRoleFromResourceResponse
     */
    public function disassociateIamRoleFromResource(DisassociateIamRoleFromResourceRequest $args)
    {
        $result = parent::disassociateIamRoleFromResource($args->toArray());
        return new DisassociateIamRoleFromResourceResponse($result->toArray());
    }
}
