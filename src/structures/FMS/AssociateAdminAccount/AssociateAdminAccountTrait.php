<?php

namespace Sunaoka\Aws\Structures\FMS\AssociateAdminAccount;

trait AssociateAdminAccountTrait
{
    /**
     * @param AssociateAdminAccountRequest $args
     * @return void
     */
    public function associateAdminAccount(AssociateAdminAccountRequest $args)
    {
        parent::associateAdminAccount($args->toArray());
    }
}
