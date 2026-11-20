<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\DeleteCustomerAccount;

trait DeleteCustomerAccountTrait
{
    /**
     * @param DeleteCustomerAccountRequest $args
     * @return DeleteCustomerAccountResponse
     */
    public function deleteCustomerAccount(DeleteCustomerAccountRequest $args)
    {
        $result = parent::deleteCustomerAccount($args->toArray());
        return new DeleteCustomerAccountResponse($result->toArray());
    }
}
