<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccountTokens;

trait ListWorkspaceServiceAccountTokensTrait
{
    /**
     * @param ListWorkspaceServiceAccountTokensRequest $args
     * @return ListWorkspaceServiceAccountTokensResponse
     */
    public function listWorkspaceServiceAccountTokens(ListWorkspaceServiceAccountTokensRequest $args)
    {
        $result = parent::listWorkspaceServiceAccountTokens($args->toArray());
        return new ListWorkspaceServiceAccountTokensResponse($result->toArray());
    }
}
