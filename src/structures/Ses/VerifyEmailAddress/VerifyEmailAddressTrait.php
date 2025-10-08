<?php

namespace Sunaoka\Aws\Structures\Ses\VerifyEmailAddress;

trait VerifyEmailAddressTrait
{
    /**
     * @param VerifyEmailAddressRequest $args
     * @return void
     */
    public function verifyEmailAddress(VerifyEmailAddressRequest $args)
    {
        parent::verifyEmailAddress($args->toArray());
    }
}
