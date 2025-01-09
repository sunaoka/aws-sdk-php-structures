<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateContainerGroupDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 60000> $FromPort
 * @property int<1, 60000> $ToPort
 * @property 'TCP'|'UDP' $Protocol
 */
class ContainerPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort: int<1, 60000>,
     *     ToPort: int<1, 60000>,
     *     Protocol: 'TCP'|'UDP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
