<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deviceType
 * @property array<string, string>|null $callbackOverrides
 */
class DeviceTemplate extends Shape
{
    /**
     * @param array{
     *     deviceType?: string|null,
     *     callbackOverrides?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
