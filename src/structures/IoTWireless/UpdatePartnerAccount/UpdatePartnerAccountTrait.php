<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdatePartnerAccount;

trait UpdatePartnerAccountTrait
{
    /**
     * @param UpdatePartnerAccountRequest $args
     * @return UpdatePartnerAccountResponse
     */
    public function updatePartnerAccount(UpdatePartnerAccountRequest $args)
    {
        $result = parent::updatePartnerAccount($args->toArray());
        return new UpdatePartnerAccountResponse($result->toArray());
    }
}
