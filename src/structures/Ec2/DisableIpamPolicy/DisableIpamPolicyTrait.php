<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableIpamPolicy;

trait DisableIpamPolicyTrait
{
    /**
     * @param DisableIpamPolicyRequest $args
     * @return DisableIpamPolicyResponse
     */
    public function disableIpamPolicy(DisableIpamPolicyRequest $args)
    {
        $result = parent::disableIpamPolicy($args->toArray());
        return new DisableIpamPolicyResponse($result->toArray());
    }
}
