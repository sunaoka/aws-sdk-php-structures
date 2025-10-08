<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAutomatedDiscoveryAccounts;

trait ListAutomatedDiscoveryAccountsTrait
{
    /**
     * @param ListAutomatedDiscoveryAccountsRequest $args
     * @return ListAutomatedDiscoveryAccountsResponse
     */
    public function listAutomatedDiscoveryAccounts(ListAutomatedDiscoveryAccountsRequest $args)
    {
        $result = parent::listAutomatedDiscoveryAccounts($args->toArray());
        return new ListAutomatedDiscoveryAccountsResponse($result->toArray());
    }
}
