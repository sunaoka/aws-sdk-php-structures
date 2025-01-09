<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContainerName
 * @property string $ContainerRuntimeId
 */
class ContainerAttribute extends Shape
{
    /**
     * @param array{
     *     ContainerName?: string,
     *     ContainerRuntimeId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
