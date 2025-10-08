<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateAccountPasswordPolicy;

trait UpdateAccountPasswordPolicyTrait
{
    /**
     * @param UpdateAccountPasswordPolicyRequest $args
     * @return void
     */
    public function updateAccountPasswordPolicy(UpdateAccountPasswordPolicyRequest $args)
    {
        parent::updateAccountPasswordPolicy($args->toArray());
    }
}
