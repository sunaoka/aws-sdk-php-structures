<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetAdministratorAccount;

trait GetAdministratorAccountTrait
{
    /**
     * @param GetAdministratorAccountRequest $args
     * @return GetAdministratorAccountResponse
     */
    public function getAdministratorAccount(GetAdministratorAccountRequest $args)
    {
        $result = parent::getAdministratorAccount($args->toArray());
        return new GetAdministratorAccountResponse($result->toArray());
    }
}
