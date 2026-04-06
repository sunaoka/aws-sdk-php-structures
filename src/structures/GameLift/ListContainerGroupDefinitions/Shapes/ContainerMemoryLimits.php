<?php

namespace Sunaoka\Aws\Structures\GameLift\ListContainerGroupDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<4, 1024000>|null $SoftLimit
 * @property int<4, 1024000>|null $HardLimit
 */
class ContainerMemoryLimits extends Shape
{
    /**
     * @param array{
     *     SoftLimit?: int<4, 1024000>|null,
     *     HardLimit?: int<4, 1024000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
