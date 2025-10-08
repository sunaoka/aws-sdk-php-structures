<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DeleteWorkspaceApiKey;

trait DeleteWorkspaceApiKeyTrait
{
    /**
     * @param DeleteWorkspaceApiKeyRequest $args
     * @return DeleteWorkspaceApiKeyResponse
     */
    public function deleteWorkspaceApiKey(DeleteWorkspaceApiKeyRequest $args)
    {
        $result = parent::deleteWorkspaceApiKey($args->toArray());
        return new DeleteWorkspaceApiKeyResponse($result->toArray());
    }
}
