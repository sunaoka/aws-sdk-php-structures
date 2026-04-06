<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 60000> $FromPort
 * @property int<1, 60000> $ToPort
 * @property string $IpRange
 * @property 'TCP'|'UDP' $Protocol
 */
class IpPermission extends Shape
{
    /**
     * @param array{
     *     FromPort: int<1, 60000>,
     *     ToPort: int<1, 60000>,
     *     IpRange: string,
     *     Protocol: 'TCP'|'UDP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
