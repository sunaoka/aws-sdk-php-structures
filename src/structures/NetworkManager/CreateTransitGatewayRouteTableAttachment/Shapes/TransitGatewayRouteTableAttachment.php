<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateTransitGatewayRouteTableAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attachment $Attachment
 * @property string $PeeringId
 * @property string $TransitGatewayRouteTableArn
 */
class TransitGatewayRouteTableAttachment extends Shape
{
    /**
     * @param array{
     *     Attachment?: Attachment,
     *     PeeringId?: string,
     *     TransitGatewayRouteTableArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
