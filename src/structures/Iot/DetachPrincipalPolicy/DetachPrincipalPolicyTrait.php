<?php

namespace Sunaoka\Aws\Structures\Iot\DetachPrincipalPolicy;

trait DetachPrincipalPolicyTrait
{
    /**
     * @param DetachPrincipalPolicyRequest $args
     * @return void
     */
    public function detachPrincipalPolicy(DetachPrincipalPolicyRequest $args)
    {
        parent::detachPrincipalPolicy($args->toArray());
    }
}
