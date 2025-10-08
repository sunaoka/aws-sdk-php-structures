<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAwsNetworkPerformanceMetricSubscriptions;

trait DescribeAwsNetworkPerformanceMetricSubscriptionsTrait
{
    /**
     * @param DescribeAwsNetworkPerformanceMetricSubscriptionsRequest $args
     * @return DescribeAwsNetworkPerformanceMetricSubscriptionsResponse
     */
    public function describeAwsNetworkPerformanceMetricSubscriptions(DescribeAwsNetworkPerformanceMetricSubscriptionsRequest $args)
    {
        $result = parent::describeAwsNetworkPerformanceMetricSubscriptions($args->toArray());
        return new DescribeAwsNetworkPerformanceMetricSubscriptionsResponse($result->toArray());
    }
}
