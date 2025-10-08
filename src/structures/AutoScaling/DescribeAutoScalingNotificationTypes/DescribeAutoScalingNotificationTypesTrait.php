<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingNotificationTypes;

trait DescribeAutoScalingNotificationTypesTrait
{
    /**
     * @return DescribeAutoScalingNotificationTypesResponse
     */
    public function describeAutoScalingNotificationTypes()
    {
        $result = parent::describeAutoScalingNotificationTypes();
        return new DescribeAutoScalingNotificationTypesResponse($result->toArray());
    }
}
