<?php

namespace Sunaoka\Aws\Structures\Chime\ListAccounts;

trait ListAccountsTrait
{
    /**
     * @param ListAccountsRequest $args
     * @return ListAccountsResponse
     */
    public function listAccounts(ListAccountsRequest $args)
    {
        $result = parent::listAccounts($args->toArray());
        return new ListAccountsResponse($result->toArray());
    }
}
