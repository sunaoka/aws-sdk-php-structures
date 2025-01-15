<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayRouteTableAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment|null $Attachment
 * @property string|null $PeeringId
 * @property string|null $TransitGatewayRouteTableArn
 */
class TransitGatewayRouteTableAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment|null,
     *     PeeringId?: string|null,
     *     TransitGatewayRouteTableArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
