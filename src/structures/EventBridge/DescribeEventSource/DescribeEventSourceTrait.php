<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEventSource;

trait DescribeEventSourceTrait
{
    /**
     * @param DescribeEventSourceRequest $args
     * @return DescribeEventSourceResponse
     */
    public function describeEventSource(DescribeEventSourceRequest $args)
    {
        $result = parent::describeEventSource($args->toArray());
        return new DescribeEventSourceResponse($result->toArray());
    }
}
