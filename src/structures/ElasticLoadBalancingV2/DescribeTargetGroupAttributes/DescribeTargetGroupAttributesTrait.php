<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetGroupAttributes;

trait DescribeTargetGroupAttributesTrait
{
    /**
     * @param DescribeTargetGroupAttributesRequest $args
     * @return DescribeTargetGroupAttributesResponse
     */
    public function describeTargetGroupAttributes(DescribeTargetGroupAttributesRequest $args)
    {
        $result = parent::describeTargetGroupAttributes($args->toArray());
        return new DescribeTargetGroupAttributesResponse($result->toArray());
    }
}
