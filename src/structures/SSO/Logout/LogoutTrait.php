<?php

namespace Sunaoka\Aws\Structures\SSO\Logout;

trait LogoutTrait
{
    /**
     * @param LogoutRequest $args
     * @return void
     */
    public function logout(LogoutRequest $args)
    {
        parent::logout($args->toArray());
    }
}
