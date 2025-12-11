<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\DisassociateAccounts;

trait DisassociateAccountsTrait
{
    /**
     * @param DisassociateAccountsRequest $args
     * @return DisassociateAccountsResponse
     */
    public function disassociateAccounts(DisassociateAccountsRequest $args)
    {
        $result = parent::disassociateAccounts($args->toArray());
        return new DisassociateAccountsResponse($result->toArray());
    }
}
