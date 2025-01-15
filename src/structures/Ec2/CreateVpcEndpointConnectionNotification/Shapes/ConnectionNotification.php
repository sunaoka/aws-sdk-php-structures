<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointConnectionNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionNotificationId
 * @property string|null $ServiceId
 * @property string|null $VpcEndpointId
 * @property 'Topic'|null $ConnectionNotificationType
 * @property string|null $ConnectionNotificationArn
 * @property list<string>|null $ConnectionEvents
 * @property 'Enabled'|'Disabled'|null $ConnectionNotificationState
 * @property string|null $ServiceRegion
 */
class ConnectionNotification extends Shape
{
    /**
     * @param array{
     *     ConnectionNotificationId?: string|null,
     *     ServiceId?: string|null,
     *     VpcEndpointId?: string|null,
     *     ConnectionNotificationType?: 'Topic'|null,
     *     ConnectionNotificationArn?: string|null,
     *     ConnectionEvents?: list<string>|null,
     *     ConnectionNotificationState?: 'Enabled'|'Disabled'|null,
     *     ServiceRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
