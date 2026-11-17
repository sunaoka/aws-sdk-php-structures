<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\SearchMemories;

trait SearchMemoriesTrait
{
    /**
     * @param SearchMemoriesRequest $args
     * @return SearchMemoriesResponse
     */
    public function searchMemories(SearchMemoriesRequest $args)
    {
        $result = parent::searchMemories($args->toArray());
        return new SearchMemoriesResponse($result->toArray());
    }
}
