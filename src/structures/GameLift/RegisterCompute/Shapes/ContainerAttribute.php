<?php

namespace Sunaoka\Aws\Structures\GameLift\RegisterCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContainerName
 * @property string|null $ContainerRuntimeId
 */
class ContainerAttribute extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string|null,
     *     ContainerRuntimeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
