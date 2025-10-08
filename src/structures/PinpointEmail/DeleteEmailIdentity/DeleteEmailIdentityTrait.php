<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\DeleteEmailIdentity;

trait DeleteEmailIdentityTrait
{
    /**
     * @param DeleteEmailIdentityRequest $args
     * @return DeleteEmailIdentityResponse
     */
    public function deleteEmailIdentity(DeleteEmailIdentityRequest $args)
    {
        $result = parent::deleteEmailIdentity($args->toArray());
        return new DeleteEmailIdentityResponse($result->toArray());
    }
}
