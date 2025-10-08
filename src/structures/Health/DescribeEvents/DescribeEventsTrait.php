<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEvents;

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
