<?php

namespace Sunaoka\Aws\Structures\signer\GetSigningPlatform;

trait GetSigningPlatformTrait
{
    /**
     * @param GetSigningPlatformRequest $args
     * @return GetSigningPlatformResponse
     */
    public function getSigningPlatform(GetSigningPlatformRequest $args)
    {
        $result = parent::getSigningPlatform($args->toArray());
        return new GetSigningPlatformResponse($result->toArray());
    }
}
