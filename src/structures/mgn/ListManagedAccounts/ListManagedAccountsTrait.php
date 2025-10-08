<?php

namespace Sunaoka\Aws\Structures\mgn\ListManagedAccounts;

trait ListManagedAccountsTrait
{
    /**
     * @param ListManagedAccountsRequest $args
     * @return ListManagedAccountsResponse
     */
    public function listManagedAccounts(ListManagedAccountsRequest $args)
    {
        $result = parent::listManagedAccounts($args->toArray());
        return new ListManagedAccountsResponse($result->toArray());
    }
}
