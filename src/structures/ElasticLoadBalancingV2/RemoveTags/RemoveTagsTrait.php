<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\RemoveTags;

trait RemoveTagsTrait
{
    /**
     * @param RemoveTagsRequest $args
     * @return RemoveTagsResponse
     */
    public function removeTags(RemoveTagsRequest $args)
    {
        $result = parent::removeTags($args->toArray());
        return new RemoveTagsResponse($result->toArray());
    }
}
