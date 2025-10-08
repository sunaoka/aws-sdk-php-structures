<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetServiceRoleForAccount;

trait GetServiceRoleForAccountTrait
{
    /**
     * @param GetServiceRoleForAccountRequest $args
     * @return GetServiceRoleForAccountResponse
     */
    public function getServiceRoleForAccount(GetServiceRoleForAccountRequest $args)
    {
        $result = parent::getServiceRoleForAccount($args->toArray());
        return new GetServiceRoleForAccountResponse($result->toArray());
    }
}
