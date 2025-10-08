<?php

namespace Sunaoka\Aws\Structures\Iot\DetachPolicy;

trait DetachPolicyTrait
{
    /**
     * @param DetachPolicyRequest $args
     * @return void
     */
    public function detachPolicy(DetachPolicyRequest $args)
    {
        parent::detachPolicy($args->toArray());
    }
}
