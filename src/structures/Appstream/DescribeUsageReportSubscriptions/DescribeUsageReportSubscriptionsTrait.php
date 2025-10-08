<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsageReportSubscriptions;

trait DescribeUsageReportSubscriptionsTrait
{
    /**
     * @param DescribeUsageReportSubscriptionsRequest $args
     * @return DescribeUsageReportSubscriptionsResponse
     */
    public function describeUsageReportSubscriptions(DescribeUsageReportSubscriptionsRequest $args)
    {
        $result = parent::describeUsageReportSubscriptions($args->toArray());
        return new DescribeUsageReportSubscriptionsResponse($result->toArray());
    }
}
