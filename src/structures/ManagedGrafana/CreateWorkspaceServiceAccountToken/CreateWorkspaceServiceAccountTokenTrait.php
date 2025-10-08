<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceServiceAccountToken;

trait CreateWorkspaceServiceAccountTokenTrait
{
    /**
     * @param CreateWorkspaceServiceAccountTokenRequest $args
     * @return CreateWorkspaceServiceAccountTokenResponse
     */
    public function createWorkspaceServiceAccountToken(CreateWorkspaceServiceAccountTokenRequest $args)
    {
        $result = parent::createWorkspaceServiceAccountToken($args->toArray());
        return new CreateWorkspaceServiceAccountTokenResponse($result->toArray());
    }
}
