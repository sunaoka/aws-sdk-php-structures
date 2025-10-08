<?php

namespace Sunaoka\Aws\Structures\Macie2\SearchResources;

trait SearchResourcesTrait
{
    /**
     * @param SearchResourcesRequest $args
     * @return SearchResourcesResponse
     */
    public function searchResources(SearchResourcesRequest $args)
    {
        $result = parent::searchResources($args->toArray());
        return new SearchResourcesResponse($result->toArray());
    }
}
