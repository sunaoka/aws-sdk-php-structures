<?php

namespace Sunaoka\Aws\Structures\Inspector2\DisableDelegatedAdminAccount;

trait DisableDelegatedAdminAccountTrait
{
    /**
     * @param DisableDelegatedAdminAccountRequest $args
     * @return DisableDelegatedAdminAccountResponse
     */
    public function disableDelegatedAdminAccount(DisableDelegatedAdminAccountRequest $args)
    {
        $result = parent::disableDelegatedAdminAccount($args->toArray());
        return new DisableDelegatedAdminAccountResponse($result->toArray());
    }
}
