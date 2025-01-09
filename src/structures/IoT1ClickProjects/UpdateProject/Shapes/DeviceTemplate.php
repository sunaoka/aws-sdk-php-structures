<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceType
 * @property array<string, string> $callbackOverrides
 */
class DeviceTemplate extends Shape
{
    /**
     * @param array{
     *     deviceType?: string,
     *     callbackOverrides?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
