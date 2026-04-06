<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListenerAttributes;

trait DescribeListenerAttributesTrait
{
    /**
     * @param DescribeListenerAttributesRequest $args
     * @return DescribeListenerAttributesResponse
     */
    public function describeListenerAttributes(DescribeListenerAttributesRequest $args)
    {
        $result = parent::describeListenerAttributes($args->toArray());
        return new DescribeListenerAttributesResponse($result->toArray());
    }
}
