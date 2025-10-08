<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeCompute;

trait DescribeComputeTrait
{
    /**
     * @param DescribeComputeRequest $args
     * @return DescribeComputeResponse
     */
    public function describeCompute(DescribeComputeRequest $args)
    {
        $result = parent::describeCompute($args->toArray());
        return new DescribeComputeResponse($result->toArray());
    }
}
