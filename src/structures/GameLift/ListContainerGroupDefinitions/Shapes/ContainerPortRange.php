<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FromPort
 * @property int $ToPort
 * @property 'TCP'|'UDP' $Protocol
 */
class ContainerPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort: int,
     *     ToPort: int,
     *     Protocol: 'TCP'|'UDP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
