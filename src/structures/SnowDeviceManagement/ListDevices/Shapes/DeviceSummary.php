<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $associatedWithJob
 * @property string|null $managedDeviceArn
 * @property string|null $managedDeviceId
 * @property array<string, string>|null $tags
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     associatedWithJob?: string|null,
     *     managedDeviceArn?: string|null,
     *     managedDeviceId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
