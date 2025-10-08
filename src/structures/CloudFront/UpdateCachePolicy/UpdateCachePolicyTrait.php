<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateCachePolicy;

trait UpdateCachePolicyTrait
{
    /**
     * @param UpdateCachePolicyRequest $args
     * @return UpdateCachePolicyResponse
     */
    public function updateCachePolicy(UpdateCachePolicyRequest $args)
    {
        $result = parent::updateCachePolicy($args->toArray());
        return new UpdateCachePolicyResponse($result->toArray());
    }
}
