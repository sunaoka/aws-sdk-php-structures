<?php

namespace Sunaoka\Aws\Structures\FMS\ListAdminsManagingAccount;

trait ListAdminsManagingAccountTrait
{
    /**
     * @param ListAdminsManagingAccountRequest $args
     * @return ListAdminsManagingAccountResponse
     */
    public function listAdminsManagingAccount(ListAdminsManagingAccountRequest $args)
    {
        $result = parent::listAdminsManagingAccount($args->toArray());
        return new ListAdminsManagingAccountResponse($result->toArray());
    }
}
