<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCachePolicy;

trait CreateCachePolicyTrait
{
    /**
     * @param CreateCachePolicyRequest $args
     * @return CreateCachePolicyResponse
     */
    public function createCachePolicy(CreateCachePolicyRequest $args)
    {
        $result = parent::createCachePolicy($args->toArray());
        return new CreateCachePolicyResponse($result->toArray());
    }
}
