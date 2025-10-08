<?php

namespace Sunaoka\Aws\Structures\Iot\AttachPrincipalPolicy;

trait AttachPrincipalPolicyTrait
{
    /**
     * @param AttachPrincipalPolicyRequest $args
     * @return void
     */
    public function attachPrincipalPolicy(AttachPrincipalPolicyRequest $args)
    {
        parent::attachPrincipalPolicy($args->toArray());
    }
}
