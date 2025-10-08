<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\DisassociateServiceRoleFromAccount;

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
