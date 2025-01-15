<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceName
 * @property string|null $deviceType
 */
class EcsInferenceAcceleratorOverride extends Shape
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
