<?php

namespace Sunaoka\Aws\Structures\EKSAuth\AssumeRoleForPodIdentity;

trait AssumeRoleForPodIdentityTrait
{
    /**
     * @param AssumeRoleForPodIdentityRequest $args
     * @return AssumeRoleForPodIdentityResponse
     */
    public function assumeRoleForPodIdentity(AssumeRoleForPodIdentityRequest $args)
    {
        $result = parent::assumeRoleForPodIdentity($args->toArray());
        return new AssumeRoleForPodIdentityResponse($result->toArray());
    }
}
