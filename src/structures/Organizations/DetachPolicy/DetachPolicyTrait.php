<?php

namespace Sunaoka\Aws\Structures\Organizations\DetachPolicy;

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
