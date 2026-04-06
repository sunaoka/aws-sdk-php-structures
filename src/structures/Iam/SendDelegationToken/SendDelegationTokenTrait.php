<?php

namespace Sunaoka\Aws\Structures\Iam\SendDelegationToken;

trait SendDelegationTokenTrait
{
    /**
     * @param SendDelegationTokenRequest $args
     * @return void
     */
    public function sendDelegationToken(SendDelegationTokenRequest $args)
    {
        parent::sendDelegationToken($args->toArray());
    }
}
