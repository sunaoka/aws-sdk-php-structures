<?php

namespace Sunaoka\Aws\Structures\IoTWireless\AssociateAwsAccountWithPartnerAccount;

trait AssociateAwsAccountWithPartnerAccountTrait
{
    /**
     * @param AssociateAwsAccountWithPartnerAccountRequest $args
     * @return AssociateAwsAccountWithPartnerAccountResponse
     */
    public function associateAwsAccountWithPartnerAccount(AssociateAwsAccountWithPartnerAccountRequest $args)
    {
        $result = parent::associateAwsAccountWithPartnerAccount($args->toArray());
        return new AssociateAwsAccountWithPartnerAccountResponse($result->toArray());
    }
}
