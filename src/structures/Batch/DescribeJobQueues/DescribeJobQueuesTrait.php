<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobQueues;

trait DescribeJobQueuesTrait
{
    /**
     * @param DescribeJobQueuesRequest $args
     * @return DescribeJobQueuesResponse
     */
    public function describeJobQueues(DescribeJobQueuesRequest $args)
    {
        $result = parent::describeJobQueues($args->toArray());
        return new DescribeJobQueuesResponse($result->toArray());
    }
}
