<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateAccessPolicy;

trait AssociateAccessPolicyTrait
{
    /**
     * @param AssociateAccessPolicyRequest $args
     * @return AssociateAccessPolicyResponse
     */
    public function associateAccessPolicy(AssociateAccessPolicyRequest $args)
    {
        $result = parent::associateAccessPolicy($args->toArray());
        return new AssociateAccessPolicyResponse($result->toArray());
    }
}
