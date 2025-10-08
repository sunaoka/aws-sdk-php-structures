<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetCachePolicy;

trait GetCachePolicyTrait
{
    /**
     * @param GetCachePolicyRequest $args
     * @return GetCachePolicyResponse
     */
    public function getCachePolicy(GetCachePolicyRequest $args)
    {
        $result = parent::getCachePolicy($args->toArray());
        return new GetCachePolicyResponse($result->toArray());
    }
}
