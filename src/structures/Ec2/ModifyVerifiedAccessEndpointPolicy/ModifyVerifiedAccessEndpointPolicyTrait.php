<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpointPolicy;

trait ModifyVerifiedAccessEndpointPolicyTrait
{
    /**
     * @param ModifyVerifiedAccessEndpointPolicyRequest $args
     * @return ModifyVerifiedAccessEndpointPolicyResponse
     */
    public function modifyVerifiedAccessEndpointPolicy(ModifyVerifiedAccessEndpointPolicyRequest $args)
    {
        $result = parent::modifyVerifiedAccessEndpointPolicy($args->toArray());
        return new ModifyVerifiedAccessEndpointPolicyResponse($result->toArray());
    }
}
