<?php

namespace Sunaoka\Aws\Structures\Budgets\DescribeSubscribersForNotification;

trait DescribeSubscribersForNotificationTrait
{
    /**
     * @param DescribeSubscribersForNotificationRequest $args
     * @return DescribeSubscribersForNotificationResponse
     */
    public function describeSubscribersForNotification(DescribeSubscribersForNotificationRequest $args)
    {
        $result = parent::describeSubscribersForNotification($args->toArray());
        return new DescribeSubscribersForNotificationResponse($result->toArray());
    }
}
