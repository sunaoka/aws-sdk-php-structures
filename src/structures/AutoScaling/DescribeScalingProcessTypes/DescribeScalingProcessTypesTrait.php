<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeScalingProcessTypes;

trait DescribeScalingProcessTypesTrait
{
    /**
     * @return DescribeScalingProcessTypesResponse
     */
    public function describeScalingProcessTypes()
    {
        $result = parent::describeScalingProcessTypes();
        return new DescribeScalingProcessTypesResponse($result->toArray());
    }
}
