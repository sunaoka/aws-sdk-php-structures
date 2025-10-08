<?php

namespace Sunaoka\Aws\Structures\Omics\ListRunCaches;

trait ListRunCachesTrait
{
    /**
     * @param ListRunCachesRequest $args
     * @return ListRunCachesResponse
     */
    public function listRunCaches(ListRunCachesRequest $args)
    {
        $result = parent::listRunCaches($args->toArray());
        return new ListRunCachesResponse($result->toArray());
    }
}
