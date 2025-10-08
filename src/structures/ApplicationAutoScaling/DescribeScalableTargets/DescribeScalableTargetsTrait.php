<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalableTargets;

trait DescribeScalableTargetsTrait
{
    /**
     * @param DescribeScalableTargetsRequest $args
     * @return DescribeScalableTargetsResponse
     */
    public function describeScalableTargets(DescribeScalableTargetsRequest $args)
    {
        $result = parent::describeScalableTargets($args->toArray());
        return new DescribeScalableTargetsResponse($result->toArray());
    }
}
