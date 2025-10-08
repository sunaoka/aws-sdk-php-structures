<?php

namespace Sunaoka\Aws\Structures\Iam\PutUserPolicy;

trait PutUserPolicyTrait
{
    /**
     * @param PutUserPolicyRequest $args
     * @return void
     */
    public function putUserPolicy(PutUserPolicyRequest $args)
    {
        parent::putUserPolicy($args->toArray());
    }
}
