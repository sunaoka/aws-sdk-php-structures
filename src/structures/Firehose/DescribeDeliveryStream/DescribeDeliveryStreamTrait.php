<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream;

trait DescribeDeliveryStreamTrait
{
    /**
     * @param DescribeDeliveryStreamRequest $args
     * @return DescribeDeliveryStreamResponse
     */
    public function describeDeliveryStream(DescribeDeliveryStreamRequest $args)
    {
        $result = parent::describeDeliveryStream($args->toArray());
        return new DescribeDeliveryStreamResponse($result->toArray());
    }
}
