<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues;

trait DescribeGameSessionQueuesTrait
{
    /**
     * @param DescribeGameSessionQueuesRequest $args
     * @return DescribeGameSessionQueuesResponse
     */
    public function describeGameSessionQueues(DescribeGameSessionQueuesRequest $args)
    {
        $result = parent::describeGameSessionQueues($args->toArray());
        return new DescribeGameSessionQueuesResponse($result->toArray());
    }
}
