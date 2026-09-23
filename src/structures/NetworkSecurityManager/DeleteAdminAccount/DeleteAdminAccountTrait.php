<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\DeleteAdminAccount;

trait DeleteAdminAccountTrait
{
    /**
     * @param DeleteAdminAccountRequest $args
     * @return void
     */
    public function deleteAdminAccount(DeleteAdminAccountRequest $args)
    {
        parent::deleteAdminAccount($args->toArray());
    }
}
