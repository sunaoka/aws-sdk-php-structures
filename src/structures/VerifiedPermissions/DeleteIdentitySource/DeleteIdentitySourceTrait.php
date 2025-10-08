<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeleteIdentitySource;

trait DeleteIdentitySourceTrait
{
    /**
     * @param DeleteIdentitySourceRequest $args
     * @return DeleteIdentitySourceResponse
     */
    public function deleteIdentitySource(DeleteIdentitySourceRequest $args)
    {
        $result = parent::deleteIdentitySource($args->toArray());
        return new DeleteIdentitySourceResponse($result->toArray());
    }
}
