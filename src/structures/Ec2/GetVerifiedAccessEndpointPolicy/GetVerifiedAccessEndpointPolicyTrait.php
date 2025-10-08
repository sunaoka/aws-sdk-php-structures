<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessEndpointPolicy;

trait GetVerifiedAccessEndpointPolicyTrait
{
    /**
     * @param GetVerifiedAccessEndpointPolicyRequest $args
     * @return GetVerifiedAccessEndpointPolicyResponse
     */
    public function getVerifiedAccessEndpointPolicy(GetVerifiedAccessEndpointPolicyRequest $args)
    {
        $result = parent::getVerifiedAccessEndpointPolicy($args->toArray());
        return new GetVerifiedAccessEndpointPolicyResponse($result->toArray());
    }
}
