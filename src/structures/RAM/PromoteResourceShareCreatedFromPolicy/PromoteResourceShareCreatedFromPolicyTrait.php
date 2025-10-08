<?php

namespace Sunaoka\Aws\Structures\RAM\PromoteResourceShareCreatedFromPolicy;

trait PromoteResourceShareCreatedFromPolicyTrait
{
    /**
     * @param PromoteResourceShareCreatedFromPolicyRequest $args
     * @return PromoteResourceShareCreatedFromPolicyResponse
     */
    public function promoteResourceShareCreatedFromPolicy(PromoteResourceShareCreatedFromPolicyRequest $args)
    {
        $result = parent::promoteResourceShareCreatedFromPolicy($args->toArray());
        return new PromoteResourceShareCreatedFromPolicyResponse($result->toArray());
    }
}
