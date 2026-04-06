<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteServerEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RouteServerId
 * @property string|null $RouteServerEndpointId
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property string|null $EniId
 * @property string|null $EniAddress
 * @property 'pending'|'available'|'deleting'|'deleted'|'failing'|'failed'|'delete-failed'|null $State
 * @property string|null $FailureReason
 * @property list<Tag>|null $Tags
 */
class RouteServerEndpoint extends Shape
{
    /**
     * @param array{
     *     RouteServerId?: string|null,
     *     RouteServerEndpointId?: string|null,
     *     VpcId?: string|null,
     *     SubnetId?: string|null,
     *     EniId?: string|null,
     *     EniAddress?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|'failing'|'failed'|'delete-failed'|null,
     *     FailureReason?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
