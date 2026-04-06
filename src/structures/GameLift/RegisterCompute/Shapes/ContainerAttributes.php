<?php

namespace Sunaoka\Aws\Structures\GameLift\RegisterCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ContainerPortMapping>|null $ContainerPortMappings
 */
class ContainerAttributes extends Shape
{
    /**
     * @param array{ContainerPortMappings?: list<ContainerPortMapping>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
