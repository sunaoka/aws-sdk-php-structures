<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RouteServerId
 * @property int|null $AmazonSideAsn
 * @property 'pending'|'available'|'modifying'|'deleting'|'deleted'|null $State
 * @property list<Tag>|null $Tags
 * @property 'enabling'|'enabled'|'resetting'|'disabling'|'disabled'|'modifying'|null $PersistRoutesState
 * @property int|null $PersistRoutesDuration
 * @property bool|null $SnsNotificationsEnabled
 * @property string|null $SnsTopicArn
 */
class RouteServer extends Shape
{
    /**
     * @param array{
     *     RouteServerId?: string|null,
     *     AmazonSideAsn?: int|null,
     *     State?: 'pending'|'available'|'modifying'|'deleting'|'deleted'|null,
     *     Tags?: list<Tag>|null,
     *     PersistRoutesState?: 'enabling'|'enabled'|'resetting'|'disabling'|'disabled'|'modifying'|null,
     *     PersistRoutesDuration?: int|null,
     *     SnsNotificationsEnabled?: bool|null,
     *     SnsTopicArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
