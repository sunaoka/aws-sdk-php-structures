<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeFlywheelIteration;

trait DescribeFlywheelIterationTrait
{
    /**
     * @param DescribeFlywheelIterationRequest $args
     * @return DescribeFlywheelIterationResponse
     */
    public function describeFlywheelIteration(DescribeFlywheelIterationRequest $args)
    {
        $result = parent::describeFlywheelIteration($args->toArray());
        return new DescribeFlywheelIterationResponse($result->toArray());
    }
}
