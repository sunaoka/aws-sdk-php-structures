<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 60000> $FromPort
 * @property int<1, 60000> $ToPort
 */
class ConnectionPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort: int<1, 60000>,
     *     ToPort: int<1, 60000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
