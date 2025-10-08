<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\Search;

trait SearchTrait
{
    /**
     * @param SearchRequest $args
     * @return SearchResponse
     */
    public function search(SearchRequest $args)
    {
        $result = parent::search($args->toArray());
        return new SearchResponse($result->toArray());
    }
}
