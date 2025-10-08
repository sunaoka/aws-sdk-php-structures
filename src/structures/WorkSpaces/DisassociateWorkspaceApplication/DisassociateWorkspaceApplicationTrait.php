<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DisassociateWorkspaceApplication;

trait DisassociateWorkspaceApplicationTrait
{
    /**
     * @param DisassociateWorkspaceApplicationRequest $args
     * @return DisassociateWorkspaceApplicationResponse
     */
    public function disassociateWorkspaceApplication(DisassociateWorkspaceApplicationRequest $args)
    {
        $result = parent::disassociateWorkspaceApplication($args->toArray());
        return new DisassociateWorkspaceApplicationResponse($result->toArray());
    }
}
