<?php

namespace Sunaoka\Aws\Structures\MediaConvert\StartJobsQuery;

trait StartJobsQueryTrait
{
    /**
     * @param StartJobsQueryRequest $args
     * @return StartJobsQueryResponse
     */
    public function startJobsQuery(StartJobsQueryRequest $args)
    {
        $result = parent::startJobsQuery($args->toArray());
        return new StartJobsQueryResponse($result->toArray());
    }
}
