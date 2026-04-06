<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateWorkspace;

trait DisassociateWorkspaceTrait
{
    /**
     * @param DisassociateWorkspaceRequest $args
     * @return DisassociateWorkspaceResponse
     */
    public function disassociateWorkspace(DisassociateWorkspaceRequest $args)
    {
        $result = parent::disassociateWorkspace($args->toArray());
        return new DisassociateWorkspaceResponse($result->toArray());
    }
}
