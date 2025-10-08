<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListDelegatedAdminAccounts;

trait ListDelegatedAdminAccountsTrait
{
    /**
     * @param ListDelegatedAdminAccountsRequest $args
     * @return ListDelegatedAdminAccountsResponse
     */
    public function listDelegatedAdminAccounts(ListDelegatedAdminAccountsRequest $args)
    {
        $result = parent::listDelegatedAdminAccounts($args->toArray());
        return new ListDelegatedAdminAccountsResponse($result->toArray());
    }
}
