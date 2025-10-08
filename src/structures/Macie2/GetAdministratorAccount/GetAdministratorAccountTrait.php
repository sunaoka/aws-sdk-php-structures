<?php

namespace Sunaoka\Aws\Structures\Macie2\GetAdministratorAccount;

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
