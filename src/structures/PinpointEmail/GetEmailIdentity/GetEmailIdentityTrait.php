<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetEmailIdentity;

trait GetEmailIdentityTrait
{
    /**
     * @param GetEmailIdentityRequest $args
     * @return GetEmailIdentityResponse
     */
    public function getEmailIdentity(GetEmailIdentityRequest $args)
    {
        $result = parent::getEmailIdentity($args->toArray());
        return new GetEmailIdentityResponse($result->toArray());
    }
}
