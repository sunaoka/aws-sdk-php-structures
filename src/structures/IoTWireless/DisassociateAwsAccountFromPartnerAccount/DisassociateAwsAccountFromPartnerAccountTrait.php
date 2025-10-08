<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DisassociateAwsAccountFromPartnerAccount;

trait DisassociateAwsAccountFromPartnerAccountTrait
{
    /**
     * @param DisassociateAwsAccountFromPartnerAccountRequest $args
     * @return DisassociateAwsAccountFromPartnerAccountResponse
     */
    public function disassociateAwsAccountFromPartnerAccount(DisassociateAwsAccountFromPartnerAccountRequest $args)
    {
        $result = parent::disassociateAwsAccountFromPartnerAccount($args->toArray());
        return new DisassociateAwsAccountFromPartnerAccountResponse($result->toArray());
    }
}
