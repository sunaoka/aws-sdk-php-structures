<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property string|null $deviceType
 */
class InferenceAcceleratorOverride extends Shape
{
    /**
     * @param array{
     *     deviceName?: string|null,
     *     deviceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
