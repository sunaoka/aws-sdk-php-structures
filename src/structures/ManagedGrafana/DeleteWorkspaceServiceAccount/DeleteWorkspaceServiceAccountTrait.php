<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DeleteWorkspaceServiceAccount;

trait DeleteWorkspaceServiceAccountTrait
{
    /**
     * @param DeleteWorkspaceServiceAccountRequest $args
     * @return DeleteWorkspaceServiceAccountResponse
     */
    public function deleteWorkspaceServiceAccount(DeleteWorkspaceServiceAccountRequest $args)
    {
        $result = parent::deleteWorkspaceServiceAccount($args->toArray());
        return new DeleteWorkspaceServiceAccountResponse($result->toArray());
    }
}
