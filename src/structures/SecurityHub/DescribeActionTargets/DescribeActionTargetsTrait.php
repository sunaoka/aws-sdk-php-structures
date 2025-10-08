<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeActionTargets;

trait DescribeActionTargetsTrait
{
    /**
     * @param DescribeActionTargetsRequest $args
     * @return DescribeActionTargetsResponse
     */
    public function describeActionTargets(DescribeActionTargetsRequest $args)
    {
        $result = parent::describeActionTargets($args->toArray());
        return new DescribeActionTargetsResponse($result->toArray());
    }
}
