<?php

namespace Sunaoka\Aws\Structures\Iam\DetachGroupPolicy;

trait DetachGroupPolicyTrait
{
    /**
     * @param DetachGroupPolicyRequest $args
     * @return void
     */
    public function detachGroupPolicy(DetachGroupPolicyRequest $args)
    {
        parent::detachGroupPolicy($args->toArray());
    }
}
