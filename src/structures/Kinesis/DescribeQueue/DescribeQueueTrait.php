<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeQueue;

trait DescribeQueueTrait
{
    /**
     * @param DescribeQueueRequest $args
     * @return DescribeQueueResponse
     */
    public function describeQueue(DescribeQueueRequest $args)
    {
        $result = parent::describeQueue($args->toArray());
        return new DescribeQueueResponse($result->toArray());
    }
}
