<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceName
 * @property string $deviceType
 */
class EcsInferenceAcceleratorOverride extends Shape
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
