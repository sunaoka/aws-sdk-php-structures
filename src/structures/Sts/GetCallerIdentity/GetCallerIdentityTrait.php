<?php

namespace Sunaoka\Aws\Structures\Sts\GetCallerIdentity;

trait GetCallerIdentityTrait
{
    /**
     * @param GetCallerIdentityRequest $args
     * @return GetCallerIdentityResponse
     */
    public function getCallerIdentity(GetCallerIdentityRequest $args)
    {
        $result = parent::getCallerIdentity($args->toArray());
        return new GetCallerIdentityResponse($result->toArray());
    }
}
