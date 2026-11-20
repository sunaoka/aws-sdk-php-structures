<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateCustomerAccount;

trait UpdateCustomerAccountTrait
{
    /**
     * @param UpdateCustomerAccountRequest $args
     * @return UpdateCustomerAccountResponse
     */
    public function updateCustomerAccount(UpdateCustomerAccountRequest $args)
    {
        $result = parent::updateCustomerAccount($args->toArray());
        return new UpdateCustomerAccountResponse($result->toArray());
    }
}
