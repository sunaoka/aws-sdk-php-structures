<?php

namespace Sunaoka\Aws\Structures\Iam\PutGroupPolicy;

trait PutGroupPolicyTrait
{
    /**
     * @param PutGroupPolicyRequest $args
     * @return void
     */
    public function putGroupPolicy(PutGroupPolicyRequest $args)
    {
        parent::putGroupPolicy($args->toArray());
    }
}
