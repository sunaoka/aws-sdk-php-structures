<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackEvents;

trait DescribeStackEventsTrait
{
    /**
     * @param DescribeStackEventsRequest $args
     * @return DescribeStackEventsResponse
     */
    public function describeStackEvents(DescribeStackEventsRequest $args)
    {
        $result = parent::describeStackEvents($args->toArray());
        return new DescribeStackEventsResponse($result->toArray());
    }
}
