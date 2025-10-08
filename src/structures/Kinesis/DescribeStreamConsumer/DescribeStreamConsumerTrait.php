<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamConsumer;

trait DescribeStreamConsumerTrait
{
    /**
     * @param DescribeStreamConsumerRequest $args
     * @return DescribeStreamConsumerResponse
     */
    public function describeStreamConsumer(DescribeStreamConsumerRequest $args)
    {
        $result = parent::describeStreamConsumer($args->toArray());
        return new DescribeStreamConsumerResponse($result->toArray());
    }
}
