<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointConnectionNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionNotificationId
 * @property string $ServiceId
 * @property string $VpcEndpointId
 * @property 'Topic' $ConnectionNotificationType
 * @property string $ConnectionNotificationArn
 * @property list<string> $ConnectionEvents
 * @property 'Enabled'|'Disabled' $ConnectionNotificationState
 * @property string $ServiceRegion
 */
class ConnectionNotification extends Shape
{
    /**
     * @param array{
     *     ConnectionNotificationId?: string,
     *     ServiceId?: string,
     *     VpcEndpointId?: string,
     *     ConnectionNotificationType?: 'Topic',
     *     ConnectionNotificationArn?: string,
     *     ConnectionEvents?: list<string>,
     *     ConnectionNotificationState?: 'Enabled'|'Disabled',
     *     ServiceRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
