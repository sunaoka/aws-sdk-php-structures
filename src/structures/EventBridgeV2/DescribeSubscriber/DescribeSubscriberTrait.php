<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber;

trait DescribeSubscriberTrait
{
    /**
     * @param DescribeSubscriberRequest $args
     * @return DescribeSubscriberResponse
     */
    public function describeSubscriber(DescribeSubscriberRequest $args)
    {
        $result = parent::describeSubscriber($args->toArray());
        return new DescribeSubscriberResponse($result->toArray());
    }
}
