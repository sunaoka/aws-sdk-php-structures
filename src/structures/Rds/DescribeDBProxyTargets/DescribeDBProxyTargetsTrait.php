<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyTargets;

trait DescribeDBProxyTargetsTrait
{
    /**
     * @param DescribeDBProxyTargetsRequest $args
     * @return DescribeDBProxyTargetsResponse
     */
    public function describeDBProxyTargets(DescribeDBProxyTargetsRequest $args)
    {
        $result = parent::describeDBProxyTargets($args->toArray());
        return new DescribeDBProxyTargetsResponse($result->toArray());
    }
}
