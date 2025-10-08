<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaceServiceAccounts;

trait ListWorkspaceServiceAccountsTrait
{
    /**
     * @param ListWorkspaceServiceAccountsRequest $args
     * @return ListWorkspaceServiceAccountsResponse
     */
    public function listWorkspaceServiceAccounts(ListWorkspaceServiceAccountsRequest $args)
    {
        $result = parent::listWorkspaceServiceAccounts($args->toArray());
        return new ListWorkspaceServiceAccountsResponse($result->toArray());
    }
}
