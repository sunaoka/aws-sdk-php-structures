<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateWorkspace;

trait AssociateWorkspaceTrait
{
    /**
     * @param AssociateWorkspaceRequest $args
     * @return AssociateWorkspaceResponse
     */
    public function associateWorkspace(AssociateWorkspaceRequest $args)
    {
        $result = parent::associateWorkspace($args->toArray());
        return new AssociateWorkspaceResponse($result->toArray());
    }
}
