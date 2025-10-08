<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListPartnerAccounts;

trait ListPartnerAccountsTrait
{
    /**
     * @param ListPartnerAccountsRequest $args
     * @return ListPartnerAccountsResponse
     */
    public function listPartnerAccounts(ListPartnerAccountsRequest $args)
    {
        $result = parent::listPartnerAccounts($args->toArray());
        return new ListPartnerAccountsResponse($result->toArray());
    }
}
