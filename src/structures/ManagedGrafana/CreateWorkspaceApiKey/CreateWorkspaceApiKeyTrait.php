<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspaceApiKey;

trait CreateWorkspaceApiKeyTrait
{
    /**
     * @param CreateWorkspaceApiKeyRequest $args
     * @return CreateWorkspaceApiKeyResponse
     */
    public function createWorkspaceApiKey(CreateWorkspaceApiKeyRequest $args)
    {
        $result = parent::createWorkspaceApiKey($args->toArray());
        return new CreateWorkspaceApiKeyResponse($result->toArray());
    }
}
