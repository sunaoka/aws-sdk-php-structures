<?php

namespace Sunaoka\Aws\Structures\Acm\ListAcmeAccounts;

trait ListAcmeAccountsTrait
{
    /**
     * @param ListAcmeAccountsRequest $args
     * @return ListAcmeAccountsResponse
     */
    public function listAcmeAccounts(ListAcmeAccountsRequest $args)
    {
        $result = parent::listAcmeAccounts($args->toArray());
        return new ListAcmeAccountsResponse($result->toArray());
    }
}
