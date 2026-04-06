<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent;

trait DescribeClusterEventTrait
{
    /**
     * @param DescribeClusterEventRequest $args
     * @return DescribeClusterEventResponse
     */
    public function describeClusterEvent(DescribeClusterEventRequest $args)
    {
        $result = parent::describeClusterEvent($args->toArray());
        return new DescribeClusterEventResponse($result->toArray());
    }
}
