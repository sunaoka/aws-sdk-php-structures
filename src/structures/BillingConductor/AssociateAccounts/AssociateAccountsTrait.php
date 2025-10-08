<?php

namespace Sunaoka\Aws\Structures\BillingConductor\AssociateAccounts;

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
