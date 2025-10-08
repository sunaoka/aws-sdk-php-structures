<?php

namespace Sunaoka\Aws\Structures\Greengrass\AssociateServiceRoleToAccount;

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
