<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListAdminAccounts;

trait ListAdminAccountsTrait
{
    /**
     * @param ListAdminAccountsRequest $args
     * @return ListAdminAccountsResponse
     */
    public function listAdminAccounts(ListAdminAccountsRequest $args)
    {
        $result = parent::listAdminAccounts($args->toArray());
        return new ListAdminAccountsResponse($result->toArray());
    }
}
