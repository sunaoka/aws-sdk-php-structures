<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListPartnerEventSourceAccounts;

trait ListPartnerEventSourceAccountsTrait
{
    /**
     * @param ListPartnerEventSourceAccountsRequest $args
     * @return ListPartnerEventSourceAccountsResponse
     */
    public function listPartnerEventSourceAccounts(ListPartnerEventSourceAccountsRequest $args)
    {
        $result = parent::listPartnerEventSourceAccounts($args->toArray());
        return new ListPartnerEventSourceAccountsResponse($result->toArray());
    }
}
