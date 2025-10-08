<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateAssumeRolePolicy;

trait UpdateAssumeRolePolicyTrait
{
    /**
     * @param UpdateAssumeRolePolicyRequest $args
     * @return void
     */
    public function updateAssumeRolePolicy(UpdateAssumeRolePolicyRequest $args)
    {
        parent::updateAssumeRolePolicy($args->toArray());
    }
}
