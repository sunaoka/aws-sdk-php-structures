<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\PutAdminAccount;

trait PutAdminAccountTrait
{
    /**
     * @param PutAdminAccountRequest $args
     * @return PutAdminAccountResponse
     */
    public function putAdminAccount(PutAdminAccountRequest $args)
    {
        $result = parent::putAdminAccount($args->toArray());
        return new PutAdminAccountResponse($result->toArray());
    }
}
