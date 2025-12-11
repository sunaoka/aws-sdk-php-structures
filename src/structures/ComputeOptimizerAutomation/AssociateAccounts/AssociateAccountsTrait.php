<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\AssociateAccounts;

trait AssociateAccountsTrait
{
    /**
     * @param AssociateAccountsRequest $args
     * @return AssociateAccountsResponse
     */
    public function associateAccounts(AssociateAccountsRequest $args)
    {
        $result = parent::associateAccounts($args->toArray());
        return new AssociateAccountsResponse($result->toArray());
    }
}
