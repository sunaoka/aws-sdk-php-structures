<?php

namespace Sunaoka\Aws\Structures\drs\ListStagingAccounts;

trait ListStagingAccountsTrait
{
    /**
     * @param ListStagingAccountsRequest $args
     * @return ListStagingAccountsResponse
     */
    public function listStagingAccounts(ListStagingAccountsRequest $args)
    {
        $result = parent::listStagingAccounts($args->toArray());
        return new ListStagingAccountsResponse($result->toArray());
    }
}
