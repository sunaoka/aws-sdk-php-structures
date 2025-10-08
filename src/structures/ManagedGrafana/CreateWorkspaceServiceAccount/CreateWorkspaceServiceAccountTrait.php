<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccount;

trait CreateWorkspaceServiceAccountTrait
{
    /**
     * @param CreateWorkspaceServiceAccountRequest $args
     * @return CreateWorkspaceServiceAccountResponse
     */
    public function createWorkspaceServiceAccount(CreateWorkspaceServiceAccountRequest $args)
    {
        $result = parent::createWorkspaceServiceAccount($args->toArray());
        return new CreateWorkspaceServiceAccountResponse($result->toArray());
    }
}
