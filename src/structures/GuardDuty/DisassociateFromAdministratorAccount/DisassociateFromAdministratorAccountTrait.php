<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DisassociateFromAdministratorAccount;

trait DisassociateFromAdministratorAccountTrait
{
    /**
     * @param DisassociateFromAdministratorAccountRequest $args
     * @return DisassociateFromAdministratorAccountResponse
     */
    public function disassociateFromAdministratorAccount(DisassociateFromAdministratorAccountRequest $args)
    {
        $result = parent::disassociateFromAdministratorAccount($args->toArray());
        return new DisassociateFromAdministratorAccountResponse($result->toArray());
    }
}
