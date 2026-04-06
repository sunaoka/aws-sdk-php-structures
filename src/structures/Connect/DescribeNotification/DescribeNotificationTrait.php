<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeNotification;

trait DescribeNotificationTrait
{
    /**
     * @param DescribeNotificationRequest $args
     * @return DescribeNotificationResponse
     */
    public function describeNotification(DescribeNotificationRequest $args)
    {
        $result = parent::describeNotification($args->toArray());
        return new DescribeNotificationResponse($result->toArray());
    }
}
