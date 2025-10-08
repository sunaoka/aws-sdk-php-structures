<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DisassociateFromMasterAccount;

trait DisassociateFromMasterAccountTrait
{
    /**
     * @param DisassociateFromMasterAccountRequest $args
     * @return DisassociateFromMasterAccountResponse
     */
    public function disassociateFromMasterAccount(DisassociateFromMasterAccountRequest $args)
    {
        $result = parent::disassociateFromMasterAccount($args->toArray());
        return new DisassociateFromMasterAccountResponse($result->toArray());
    }
}
