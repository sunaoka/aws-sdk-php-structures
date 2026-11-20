<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccount;

trait GetCustomerAccountTrait
{
    /**
     * @param GetCustomerAccountRequest $args
     * @return GetCustomerAccountResponse
     */
    public function getCustomerAccount(GetCustomerAccountRequest $args)
    {
        $result = parent::getCustomerAccount($args->toArray());
        return new GetCustomerAccountResponse($result->toArray());
    }
}
