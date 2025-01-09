<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListManagedEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rotationSize
 * @property int<1, 50> $maxFilesToKeep
 */
class ContainerLogRotationConfiguration extends Shape
{
    /**
     * @param array{
     *     rotationSize: string,
     *     maxFilesToKeep: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
