<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CreateScheduledQuery;

trait CreateScheduledQueryTrait
{
    /**
     * @param CreateScheduledQueryRequest $args
     * @return CreateScheduledQueryResponse
     */
    public function createScheduledQuery(CreateScheduledQueryRequest $args)
    {
        $result = parent::createScheduledQuery($args->toArray());
        return new CreateScheduledQueryResponse($result->toArray());
    }
}
