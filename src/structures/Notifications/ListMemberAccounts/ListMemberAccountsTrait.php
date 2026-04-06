<?php

namespace Sunaoka\Aws\Structures\Notifications\ListMemberAccounts;

trait ListMemberAccountsTrait
{
    /**
     * @param ListMemberAccountsRequest $args
     * @return ListMemberAccountsResponse
     */
    public function listMemberAccounts(ListMemberAccountsRequest $args)
    {
        $result = parent::listMemberAccounts($args->toArray());
        return new ListMemberAccountsResponse($result->toArray());
    }
}
