<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $TransitGatewayId
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 * @property bool $DefaultAssociationRouteTable
 * @property bool $DefaultPropagationRouteTable
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property list<Tag> $Tags
 */
class TransitGatewayRouteTable extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string,
     *     TransitGatewayId?: string,
     *     State?: 'pending'|'available'|'deleting'|'deleted',
     *     DefaultAssociationRouteTable?: bool,
     *     DefaultPropagationRouteTable?: bool,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
