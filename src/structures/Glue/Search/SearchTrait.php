<?php

namespace Sunaoka\Aws\Structures\Glue\Search;

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
