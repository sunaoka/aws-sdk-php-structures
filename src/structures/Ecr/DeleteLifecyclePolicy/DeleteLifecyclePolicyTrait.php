<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteLifecyclePolicy;

trait DeleteLifecyclePolicyTrait
{
    /**
     * @param DeleteLifecyclePolicyRequest $args
     * @return DeleteLifecyclePolicyResponse
     */
    public function deleteLifecyclePolicy(DeleteLifecyclePolicyRequest $args)
    {
        $result = parent::deleteLifecyclePolicy($args->toArray());
        return new DeleteLifecyclePolicyResponse($result->toArray());
    }
}
