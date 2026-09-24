<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeEventBus;

trait DescribeEventBusTrait
{
    /**
     * @param DescribeEventBusRequest $args
     * @return DescribeEventBusResponse
     */
    public function describeEventBus(DescribeEventBusRequest $args)
    {
        $result = parent::describeEventBus($args->toArray());
        return new DescribeEventBusResponse($result->toArray());
    }
}
