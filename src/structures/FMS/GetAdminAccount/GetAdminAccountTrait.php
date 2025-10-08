<?php

namespace Sunaoka\Aws\Structures\FMS\GetAdminAccount;

trait GetAdminAccountTrait
{
    /**
     * @param GetAdminAccountRequest $args
     * @return GetAdminAccountResponse
     */
    public function getAdminAccount(GetAdminAccountRequest $args)
    {
        $result = parent::getAdminAccount($args->toArray());
        return new GetAdminAccountResponse($result->toArray());
    }
}
