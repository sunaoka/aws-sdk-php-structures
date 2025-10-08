<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeNotificationSubscriptions;

trait DescribeNotificationSubscriptionsTrait
{
    /**
     * @param DescribeNotificationSubscriptionsRequest $args
     * @return DescribeNotificationSubscriptionsResponse
     */
    public function describeNotificationSubscriptions(DescribeNotificationSubscriptionsRequest $args)
    {
        $result = parent::describeNotificationSubscriptions($args->toArray());
        return new DescribeNotificationSubscriptionsResponse($result->toArray());
    }
}
