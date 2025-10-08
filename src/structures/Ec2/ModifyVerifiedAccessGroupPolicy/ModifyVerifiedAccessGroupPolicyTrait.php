<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessGroupPolicy;

trait ModifyVerifiedAccessGroupPolicyTrait
{
    /**
     * @param ModifyVerifiedAccessGroupPolicyRequest $args
     * @return ModifyVerifiedAccessGroupPolicyResponse
     */
    public function modifyVerifiedAccessGroupPolicy(ModifyVerifiedAccessGroupPolicyRequest $args)
    {
        $result = parent::modifyVerifiedAccessGroupPolicy($args->toArray());
        return new ModifyVerifiedAccessGroupPolicyResponse($result->toArray());
    }
}
