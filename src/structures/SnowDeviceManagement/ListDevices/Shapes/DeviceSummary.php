<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associatedWithJob
 * @property string $managedDeviceArn
 * @property string $managedDeviceId
 * @property array<string, string> $tags
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     associatedWithJob?: string,
     *     managedDeviceArn?: string,
     *     managedDeviceId?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
