<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPartnerAccount;

trait GetPartnerAccountTrait
{
    /**
     * @param GetPartnerAccountRequest $args
     * @return GetPartnerAccountResponse
     */
    public function getPartnerAccount(GetPartnerAccountRequest $args)
    {
        $result = parent::getPartnerAccount($args->toArray());
        return new GetPartnerAccountResponse($result->toArray());
    }
}
