<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FromPort
 * @property int $ToPort
 * @property string $IpRange
 * @property 'TCP'|'UDP' $Protocol
 */
class IpPermission extends Shape
{
    /**
     * @param array{
     *     FromPort: int,
     *     ToPort: int,
     *     IpRange: string,
     *     Protocol: 'TCP'|'UDP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
