<?php

namespace Sunaoka\Aws\Structures\Ecs\StartTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceName
 * @property string $deviceType
 */
class InferenceAcceleratorOverride extends Shape
{
    /**
     * @param array{
     *     deviceName?: string,
     *     deviceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
