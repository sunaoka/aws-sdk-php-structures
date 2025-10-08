<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchWorkers;

trait SearchWorkersTrait
{
    /**
     * @param SearchWorkersRequest $args
     * @return SearchWorkersResponse
     */
    public function searchWorkers(SearchWorkersRequest $args)
    {
        $result = parent::searchWorkers($args->toArray());
        return new SearchWorkersResponse($result->toArray());
    }
}
