<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateEmailIdentity;

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
