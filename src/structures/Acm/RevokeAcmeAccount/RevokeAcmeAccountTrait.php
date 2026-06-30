<?php

namespace Sunaoka\Aws\Structures\Acm\RevokeAcmeAccount;

trait RevokeAcmeAccountTrait
{
    /**
     * @param RevokeAcmeAccountRequest $args
     * @return void
     */
    public function revokeAcmeAccount(RevokeAcmeAccountRequest $args)
    {
        parent::revokeAcmeAccount($args->toArray());
    }
}
