<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointConnectionNotifications;

trait DescribeVpcEndpointConnectionNotificationsTrait
{
    /**
     * @param DescribeVpcEndpointConnectionNotificationsRequest $args
     * @return DescribeVpcEndpointConnectionNotificationsResponse
     */
    public function describeVpcEndpointConnectionNotifications(
        DescribeVpcEndpointConnectionNotificationsRequest $args,
    ) {
        $result = parent::describeVpcEndpointConnectionNotifications($args->toArray());
        return new DescribeVpcEndpointConnectionNotificationsResponse($result->toArray());
    }
}
