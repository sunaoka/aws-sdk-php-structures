<?php

namespace Sunaoka\Aws\Structures\Inspector2\EnableDelegatedAdminAccount;

trait EnableDelegatedAdminAccountTrait
{
    /**
     * @param EnableDelegatedAdminAccountRequest $args
     * @return EnableDelegatedAdminAccountResponse
     */
    public function enableDelegatedAdminAccount(EnableDelegatedAdminAccountRequest $args)
    {
        $result = parent::enableDelegatedAdminAccount($args->toArray());
        return new EnableDelegatedAdminAccountResponse($result->toArray());
    }
}
