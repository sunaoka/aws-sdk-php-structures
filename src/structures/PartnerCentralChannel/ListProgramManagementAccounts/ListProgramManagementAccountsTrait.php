<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListProgramManagementAccounts;

trait ListProgramManagementAccountsTrait
{
    /**
     * @param ListProgramManagementAccountsRequest $args
     * @return ListProgramManagementAccountsResponse
     */
    public function listProgramManagementAccounts(ListProgramManagementAccountsRequest $args)
    {
        $result = parent::listProgramManagementAccounts($args->toArray());
        return new ListProgramManagementAccountsResponse($result->toArray());
    }
}
