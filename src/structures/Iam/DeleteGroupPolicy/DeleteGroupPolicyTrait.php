<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteGroupPolicy;

trait DeleteGroupPolicyTrait
{
    /**
     * @param DeleteGroupPolicyRequest $args
     * @return void
     */
    public function deleteGroupPolicy(DeleteGroupPolicyRequest $args)
    {
        parent::deleteGroupPolicy($args->toArray());
    }
}
