<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitionVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContainerPortRange> $ContainerPortRanges
 */
class ContainerPortConfiguration extends Shape
{
    /**
     * @param array{ContainerPortRanges: list<ContainerPortRange>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
