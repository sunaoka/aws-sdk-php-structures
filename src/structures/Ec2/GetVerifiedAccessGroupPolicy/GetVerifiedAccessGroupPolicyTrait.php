<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessGroupPolicy;

trait GetVerifiedAccessGroupPolicyTrait
{
    /**
     * @param GetVerifiedAccessGroupPolicyRequest $args
     * @return GetVerifiedAccessGroupPolicyResponse
     */
    public function getVerifiedAccessGroupPolicy(GetVerifiedAccessGroupPolicyRequest $args)
    {
        $result = parent::getVerifiedAccessGroupPolicy($args->toArray());
        return new GetVerifiedAccessGroupPolicyResponse($result->toArray());
    }
}
