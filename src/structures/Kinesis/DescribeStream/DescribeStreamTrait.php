<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStream;

trait DescribeStreamTrait
{
    /**
     * @param DescribeStreamRequest $args
     * @return DescribeStreamResponse
     */
    public function describeStream(DescribeStreamRequest $args)
    {
        $result = parent::describeStream($args->toArray());
        return new DescribeStreamResponse($result->toArray());
    }
}
