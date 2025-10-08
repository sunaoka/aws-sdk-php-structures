<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceEventNotificationAttributes;

trait DescribeInstanceEventNotificationAttributesTrait
{
    /**
     * @param DescribeInstanceEventNotificationAttributesRequest $args
     * @return DescribeInstanceEventNotificationAttributesResponse
     */
    public function describeInstanceEventNotificationAttributes(
        DescribeInstanceEventNotificationAttributesRequest $args,
    ) {
        $result = parent::describeInstanceEventNotificationAttributes($args->toArray());
        return new DescribeInstanceEventNotificationAttributesResponse($result->toArray());
    }
}
