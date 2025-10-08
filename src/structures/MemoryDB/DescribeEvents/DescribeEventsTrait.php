<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEvents;

trait DescribeEventsTrait
{
    /**
     * @param DescribeEventsRequest $args
     * @return DescribeEventsResponse
     */
    public function describeEvents(DescribeEventsRequest $args)
    {
        $result = parent::describeEvents($args->toArray());
        return new DescribeEventsResponse($result->toArray());
    }
}
