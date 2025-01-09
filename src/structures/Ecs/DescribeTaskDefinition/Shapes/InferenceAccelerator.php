<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceName
 * @property string $deviceType
 */
class InferenceAccelerator extends Shape
{
    /**
     * @param array{
     *     deviceName: string,
     *     deviceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
