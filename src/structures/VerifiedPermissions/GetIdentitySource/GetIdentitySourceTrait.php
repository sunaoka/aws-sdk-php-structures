<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\GetIdentitySource;

trait GetIdentitySourceTrait
{
    /**
     * @param GetIdentitySourceRequest $args
     * @return GetIdentitySourceResponse
     */
    public function getIdentitySource(GetIdentitySourceRequest $args)
    {
        $result = parent::getIdentitySource($args->toArray());
        return new GetIdentitySourceResponse($result->toArray());
    }
}
