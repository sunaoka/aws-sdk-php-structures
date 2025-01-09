<?php

namespace Sunaoka\Aws\Structures\EMRContainers\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rotationSize
 * @property int $maxFilesToKeep
 */
class ContainerLogRotationConfiguration extends Shape
{
    /**
     * @param array{
     *     rotationSize: string,
     *     maxFilesToKeep: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
