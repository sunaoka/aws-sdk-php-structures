<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPrefixListReference\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayRouteTableId
 * @property string|null $PrefixListId
 * @property string|null $PrefixListOwnerId
 * @property 'pending'|'available'|'modifying'|'deleting'|null $State
 * @property bool|null $Blackhole
 * @property TransitGatewayPrefixListAttachment|null $TransitGatewayAttachment
 */
class TransitGatewayPrefixListReference extends Shape
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId?: string|null,
     *     PrefixListId?: string|null,
     *     PrefixListOwnerId?: string|null,
     *     State?: 'pending'|'available'|'modifying'|'deleting'|null,
     *     Blackhole?: bool|null,
     *     TransitGatewayAttachment?: TransitGatewayPrefixListAttachment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
