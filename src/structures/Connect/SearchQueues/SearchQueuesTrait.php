<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues;

trait SearchQueuesTrait
{
    /**
     * @param SearchQueuesRequest $args
     * @return SearchQueuesResponse
     */
    public function searchQueues(SearchQueuesRequest $args)
    {
        $result = parent::searchQueues($args->toArray());
        return new SearchQueuesResponse($result->toArray());
    }
}
