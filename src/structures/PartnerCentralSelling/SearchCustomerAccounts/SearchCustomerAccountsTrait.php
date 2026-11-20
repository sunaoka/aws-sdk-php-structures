<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchCustomerAccounts;

trait SearchCustomerAccountsTrait
{
    /**
     * @param SearchCustomerAccountsRequest $args
     * @return SearchCustomerAccountsResponse
     */
    public function searchCustomerAccounts(SearchCustomerAccountsRequest $args)
    {
        $result = parent::searchCustomerAccounts($args->toArray());
        return new SearchCustomerAccountsResponse($result->toArray());
    }
}
