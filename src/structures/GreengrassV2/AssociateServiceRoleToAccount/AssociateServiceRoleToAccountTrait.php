<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\AssociateServiceRoleToAccount;

trait AssociateServiceRoleToAccountTrait
{
    /**
     * @param AssociateServiceRoleToAccountRequest $args
     * @return AssociateServiceRoleToAccountResponse
     */
    public function associateServiceRoleToAccount(AssociateServiceRoleToAccountRequest $args)
    {
        $result = parent::associateServiceRoleToAccount($args->toArray());
        return new AssociateServiceRoleToAccountResponse($result->toArray());
    }
}
