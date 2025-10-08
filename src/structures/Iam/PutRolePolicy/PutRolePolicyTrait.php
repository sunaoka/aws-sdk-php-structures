<?php

namespace Sunaoka\Aws\Structures\Iam\PutRolePolicy;

trait PutRolePolicyTrait
{
    /**
     * @param PutRolePolicyRequest $args
     * @return void
     */
    public function putRolePolicy(PutRolePolicyRequest $args)
    {
        parent::putRolePolicy($args->toArray());
    }
}
