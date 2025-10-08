<?php

namespace Sunaoka\Aws\Structures\Iam\AttachUserPolicy;

trait AttachUserPolicyTrait
{
    /**
     * @param AttachUserPolicyRequest $args
     * @return void
     */
    public function attachUserPolicy(AttachUserPolicyRequest $args)
    {
        parent::attachUserPolicy($args->toArray());
    }
}
