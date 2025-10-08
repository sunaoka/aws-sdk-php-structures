<?php

namespace Sunaoka\Aws\Structures\Iam\DetachUserPolicy;

trait DetachUserPolicyTrait
{
    /**
     * @param DetachUserPolicyRequest $args
     * @return void
     */
    public function detachUserPolicy(DetachUserPolicyRequest $args)
    {
        parent::detachUserPolicy($args->toArray());
    }
}
