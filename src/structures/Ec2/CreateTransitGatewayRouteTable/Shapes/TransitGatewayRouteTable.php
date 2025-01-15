<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayRouteTableId
 * @property string|null $TransitGatewayId
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 * @property bool|null $DefaultAssociationRouteTable
 * @property bool|null $DefaultPropagationRouteTable
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Tag>|null $Tags
 */
class TransitGatewayRouteTable extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string|null,
     *     TransitGatewayId?: string|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null,
     *     DefaultAssociationRouteTable?: bool|null,
     *     DefaultPropagationRouteTable?: bool|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
