<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithWebIdentity;

trait AssumeRoleWithWebIdentityTrait
{
    /**
     * @param AssumeRoleWithWebIdentityRequest $args
     * @return AssumeRoleWithWebIdentityResponse
     */
    public function assumeRoleWithWebIdentity(AssumeRoleWithWebIdentityRequest $args)
    {
        $result = parent::assumeRoleWithWebIdentity($args->toArray());
        return new AssumeRoleWithWebIdentityResponse($result->toArray());
    }
}
