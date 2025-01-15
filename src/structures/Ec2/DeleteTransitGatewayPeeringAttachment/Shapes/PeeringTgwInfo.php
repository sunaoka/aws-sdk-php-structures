<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPeeringAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransitGatewayId
 * @property string|null $CoreNetworkId
 * @property string|null $OwnerId
 * @property string|null $Region
 */
class PeeringTgwInfo extends Shape
{
    /**
     * @param array{
     *     TransitGatewayId?: string|null,
     *     CoreNetworkId?: string|null,
     *     OwnerId?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
