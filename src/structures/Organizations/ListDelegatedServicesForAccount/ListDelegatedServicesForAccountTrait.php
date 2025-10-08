<?php

namespace Sunaoka\Aws\Structures\Organizations\ListDelegatedServicesForAccount;

trait ListDelegatedServicesForAccountTrait
{
    /**
     * @param ListDelegatedServicesForAccountRequest $args
     * @return ListDelegatedServicesForAccountResponse
     */
    public function listDelegatedServicesForAccount(ListDelegatedServicesForAccountRequest $args)
    {
        $result = parent::listDelegatedServicesForAccount($args->toArray());
        return new ListDelegatedServicesForAccountResponse($result->toArray());
    }
}
