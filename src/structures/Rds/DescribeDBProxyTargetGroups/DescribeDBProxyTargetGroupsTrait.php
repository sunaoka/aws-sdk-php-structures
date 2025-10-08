<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBProxyTargetGroups;

trait DescribeDBProxyTargetGroupsTrait
{
    /**
     * @param DescribeDBProxyTargetGroupsRequest $args
     * @return DescribeDBProxyTargetGroupsResponse
     */
    public function describeDBProxyTargetGroups(DescribeDBProxyTargetGroupsRequest $args)
    {
        $result = parent::describeDBProxyTargetGroups($args->toArray());
        return new DescribeDBProxyTargetGroupsResponse($result->toArray());
    }
}
