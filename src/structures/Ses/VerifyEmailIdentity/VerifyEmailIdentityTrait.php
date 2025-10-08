<?php

namespace Sunaoka\Aws\Structures\Ses\VerifyEmailIdentity;

trait VerifyEmailIdentityTrait
{
    /**
     * @param VerifyEmailIdentityRequest $args
     * @return VerifyEmailIdentityResponse
     */
    public function verifyEmailIdentity(VerifyEmailIdentityRequest $args)
    {
        $result = parent::verifyEmailIdentity($args->toArray());
        return new VerifyEmailIdentityResponse($result->toArray());
    }
}
