<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableIpamPolicy;

trait EnableIpamPolicyTrait
{
    /**
     * @param EnableIpamPolicyRequest $args
     * @return EnableIpamPolicyResponse
     */
    public function enableIpamPolicy(EnableIpamPolicyRequest $args)
    {
        $result = parent::enableIpamPolicy($args->toArray());
        return new EnableIpamPolicyResponse($result->toArray());
    }
}
