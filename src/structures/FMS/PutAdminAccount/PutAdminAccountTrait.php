<?php

namespace Sunaoka\Aws\Structures\FMS\PutAdminAccount;

trait PutAdminAccountTrait
{
    /**
     * @param PutAdminAccountRequest $args
     * @return void
     */
    public function putAdminAccount(PutAdminAccountRequest $args)
    {
        parent::putAdminAccount($args->toArray());
    }
}
