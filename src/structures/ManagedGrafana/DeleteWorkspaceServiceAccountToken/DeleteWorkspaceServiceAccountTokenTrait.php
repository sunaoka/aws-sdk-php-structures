<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DeleteWorkspaceServiceAccountToken;

trait DeleteWorkspaceServiceAccountTokenTrait
{
    /**
     * @param DeleteWorkspaceServiceAccountTokenRequest $args
     * @return DeleteWorkspaceServiceAccountTokenResponse
     */
    public function deleteWorkspaceServiceAccountToken(DeleteWorkspaceServiceAccountTokenRequest $args)
    {
        $result = parent::deleteWorkspaceServiceAccountToken($args->toArray());
        return new DeleteWorkspaceServiceAccountTokenResponse($result->toArray());
    }
}
