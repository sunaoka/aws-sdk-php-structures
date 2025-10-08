<?php

namespace Sunaoka\Aws\Structures\Iam\UntagPolicy;

trait UntagPolicyTrait
{
    /**
     * @param UntagPolicyRequest $args
     * @return void
     */
    public function untagPolicy(UntagPolicyRequest $args)
    {
        parent::untagPolicy($args->toArray());
    }
}
