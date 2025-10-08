<?php

namespace Sunaoka\Aws\Structures\Iam\TagPolicy;

trait TagPolicyTrait
{
    /**
     * @param TagPolicyRequest $args
     * @return void
     */
    public function tagPolicy(TagPolicyRequest $args)
    {
        parent::tagPolicy($args->toArray());
    }
}
