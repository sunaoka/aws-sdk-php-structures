<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingListener;

trait DescribeCustomRoutingListenerTrait
{
    /**
     * @param DescribeCustomRoutingListenerRequest $args
     * @return DescribeCustomRoutingListenerResponse
     */
    public function describeCustomRoutingListener(DescribeCustomRoutingListenerRequest $args)
    {
        $result = parent::describeCustomRoutingListener($args->toArray());
        return new DescribeCustomRoutingListenerResponse($result->toArray());
    }
}
