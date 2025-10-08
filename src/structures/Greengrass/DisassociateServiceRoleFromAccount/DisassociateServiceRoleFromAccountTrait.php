<?php

namespace Sunaoka\Aws\Structures\Greengrass\DisassociateServiceRoleFromAccount;

trait DisassociateServiceRoleFromAccountTrait
{
    /**
     * @param DisassociateServiceRoleFromAccountRequest $args
     * @return DisassociateServiceRoleFromAccountResponse
     */
    public function disassociateServiceRoleFromAccount(DisassociateServiceRoleFromAccountRequest $args)
    {
        $result = parent::disassociateServiceRoleFromAccount($args->toArray());
        return new DisassociateServiceRoleFromAccountResponse($result->toArray());
    }
}
