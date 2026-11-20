<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateCustomerAccount;

trait CreateCustomerAccountTrait
{
    /**
     * @param CreateCustomerAccountRequest $args
     * @return CreateCustomerAccountResponse
     */
    public function createCustomerAccount(CreateCustomerAccountRequest $args)
    {
        $result = parent::createCustomerAccount($args->toArray());
        return new CreateCustomerAccountResponse($result->toArray());
    }
}
