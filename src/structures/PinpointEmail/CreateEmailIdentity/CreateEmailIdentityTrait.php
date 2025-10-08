<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateEmailIdentity;

trait CreateEmailIdentityTrait
{
    /**
     * @param CreateEmailIdentityRequest $args
     * @return CreateEmailIdentityResponse
     */
    public function createEmailIdentity(CreateEmailIdentityRequest $args)
    {
        $result = parent::createEmailIdentity($args->toArray());
        return new CreateEmailIdentityResponse($result->toArray());
    }
}
