<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchTopics;

trait SearchTopicsTrait
{
    /**
     * @param SearchTopicsRequest $args
     * @return SearchTopicsResponse
     */
    public function searchTopics(SearchTopicsRequest $args)
    {
        $result = parent::searchTopics($args->toArray());
        return new SearchTopicsResponse($result->toArray());
    }
}
