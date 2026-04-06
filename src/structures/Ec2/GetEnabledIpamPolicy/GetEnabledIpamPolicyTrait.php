<?php

namespace Sunaoka\Aws\Structures\Ec2\GetEnabledIpamPolicy;

trait GetEnabledIpamPolicyTrait
{
    /**
     * @param GetEnabledIpamPolicyRequest $args
     * @return GetEnabledIpamPolicyResponse
     */
    public function getEnabledIpamPolicy(GetEnabledIpamPolicyRequest $args)
    {
        $result = parent::getEnabledIpamPolicy($args->toArray());
        return new GetEnabledIpamPolicyResponse($result->toArray());
    }
}
