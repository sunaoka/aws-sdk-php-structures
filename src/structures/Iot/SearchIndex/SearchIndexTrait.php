<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex;

trait SearchIndexTrait
{
    /**
     * @param SearchIndexRequest $args
     * @return SearchIndexResponse
     */
    public function searchIndex(SearchIndexRequest $args)
    {
        $result = parent::searchIndex($args->toArray());
        return new SearchIndexResponse($result->toArray());
    }
}
