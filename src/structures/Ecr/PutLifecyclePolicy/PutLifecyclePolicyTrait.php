<?php

namespace Sunaoka\Aws\Structures\Ecr\PutLifecyclePolicy;

trait PutLifecyclePolicyTrait
{
    /**
     * @param PutLifecyclePolicyRequest $args
     * @return PutLifecyclePolicyResponse
     */
    public function putLifecyclePolicy(PutLifecyclePolicyRequest $args)
    {
        $result = parent::putLifecyclePolicy($args->toArray());
        return new PutLifecyclePolicyResponse($result->toArray());
    }
}
