<?php

namespace Sunaoka\Aws\Structures\Iot\AttachPolicy;

trait AttachPolicyTrait
{
    /**
     * @param AttachPolicyRequest $args
     * @return void
     */
    public function attachPolicy(AttachPolicyRequest $args)
    {
        parent::attachPolicy($args->toArray());
    }
}
