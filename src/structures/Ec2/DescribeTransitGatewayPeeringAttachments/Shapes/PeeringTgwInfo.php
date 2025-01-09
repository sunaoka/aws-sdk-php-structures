<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayPeeringAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransitGatewayId
 * @property string $CoreNetworkId
 * @property string $OwnerId
 * @property string $Region
 */
class PeeringTgwInfo extends Shape
{
    /**
     * @param array{
     *     TransitGatewayId?: string,
     *     CoreNetworkId?: string,
     *     OwnerId?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
