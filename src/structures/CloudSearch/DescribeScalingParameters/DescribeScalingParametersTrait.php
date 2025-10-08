<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeScalingParameters;

trait DescribeScalingParametersTrait
{
    /**
     * @param DescribeScalingParametersRequest $args
     * @return DescribeScalingParametersResponse
     */
    public function describeScalingParameters(DescribeScalingParametersRequest $args)
    {
        $result = parent::describeScalingParameters($args->toArray());
        return new DescribeScalingParametersResponse($result->toArray());
    }
}
