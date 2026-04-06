<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchUpdateAutomatedDiscoveryAccounts;

trait BatchUpdateAutomatedDiscoveryAccountsTrait
{
    /**
     * @param BatchUpdateAutomatedDiscoveryAccountsRequest $args
     * @return BatchUpdateAutomatedDiscoveryAccountsResponse
     */
    public function batchUpdateAutomatedDiscoveryAccounts(BatchUpdateAutomatedDiscoveryAccountsRequest $args)
    {
        $result = parent::batchUpdateAutomatedDiscoveryAccounts($args->toArray());
        return new BatchUpdateAutomatedDiscoveryAccountsResponse($result->toArray());
    }
}
