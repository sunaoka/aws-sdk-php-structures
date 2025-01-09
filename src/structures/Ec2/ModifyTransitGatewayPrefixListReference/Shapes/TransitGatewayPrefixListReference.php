<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPrefixListReference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $PrefixListId
 * @property string $PrefixListOwnerId
 * @property 'pending'|'available'|'modifying'|'deleting' $State
 * @property bool $Blackhole
 * @property TransitGatewayPrefixListAttachment $TransitGatewayAttachment
 */
class TransitGatewayPrefixListReference extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string,
     *     PrefixListId?: string,
     *     PrefixListOwnerId?: string,
     *     State?: 'pending'|'available'|'modifying'|'deleting',
     *     Blackhole?: bool,
     *     TransitGatewayAttachment?: TransitGatewayPrefixListAttachment
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
