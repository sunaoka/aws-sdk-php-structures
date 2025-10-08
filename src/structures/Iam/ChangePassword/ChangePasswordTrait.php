<?php

namespace Sunaoka\Aws\Structures\Iam\ChangePassword;

trait ChangePasswordTrait
{
    /**
     * @param ChangePasswordRequest $args
     * @return void
     */
    public function changePassword(ChangePasswordRequest $args)
    {
        parent::changePassword($args->toArray());
    }
}
