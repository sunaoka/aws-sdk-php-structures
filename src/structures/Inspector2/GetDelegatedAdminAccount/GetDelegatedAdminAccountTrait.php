<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetDelegatedAdminAccount;

trait GetDelegatedAdminAccountTrait
{
    /**
     * @param GetDelegatedAdminAccountRequest $args
     * @return GetDelegatedAdminAccountResponse
     */
    public function getDelegatedAdminAccount(GetDelegatedAdminAccountRequest $args)
    {
        $result = parent::getDelegatedAdminAccount($args->toArray());
        return new GetDelegatedAdminAccountResponse($result->toArray());
    }
}
