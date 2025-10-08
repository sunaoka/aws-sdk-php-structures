<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteCachePolicy;

trait DeleteCachePolicyTrait
{
    /**
     * @param DeleteCachePolicyRequest $args
     * @return void
     */
    public function deleteCachePolicy(DeleteCachePolicyRequest $args)
    {
        parent::deleteCachePolicy($args->toArray());
    }
}
