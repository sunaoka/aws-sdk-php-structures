<?php

namespace Sunaoka\Aws\Structures\Iam\AttachGroupPolicy;

trait AttachGroupPolicyTrait
{
    /**
     * @param AttachGroupPolicyRequest $args
     * @return void
     */
    public function attachGroupPolicy(AttachGroupPolicyRequest $args)
    {
        parent::attachGroupPolicy($args->toArray());
    }
}
