<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteIdentity;

trait DeleteIdentityTrait
{
    /**
     * @param DeleteIdentityRequest $args
     * @return DeleteIdentityResponse
     */
    public function deleteIdentity(DeleteIdentityRequest $args)
    {
        $result = parent::deleteIdentity($args->toArray());
        return new DeleteIdentityResponse($result->toArray());
    }
}
