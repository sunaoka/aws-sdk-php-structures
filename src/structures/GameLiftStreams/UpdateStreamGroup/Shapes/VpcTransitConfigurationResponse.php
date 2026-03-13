<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\UpdateStreamGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property list<string>|null $Ipv4CidrBlocks
 * @property string|null $TransitGatewayId
 * @property string|null $TransitGatewayResourceShareArn
 */
class VpcTransitConfigurationResponse extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     Ipv4CidrBlocks?: list<string>|null,
     *     TransitGatewayId?: string|null,
     *     TransitGatewayResourceShareArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
