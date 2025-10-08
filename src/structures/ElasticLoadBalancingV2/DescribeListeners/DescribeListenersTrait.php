<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListeners;

trait DescribeListenersTrait
{
    /**
     * @param DescribeListenersRequest $args
     * @return DescribeListenersResponse
     */
    public function describeListeners(DescribeListenersRequest $args)
    {
        $result = parent::describeListeners($args->toArray());
        return new DescribeListenersResponse($result->toArray());
    }
}
