<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCrossAccountResourceAccounts;

trait ListCrossAccountResourceAccountsTrait
{
    /**
     * @param ListCrossAccountResourceAccountsRequest $args
     * @return ListCrossAccountResourceAccountsResponse
     */
    public function listCrossAccountResourceAccounts(ListCrossAccountResourceAccountsRequest $args)
    {
        $result = parent::listCrossAccountResourceAccounts($args->toArray());
        return new ListCrossAccountResourceAccountsResponse($result->toArray());
    }
}
