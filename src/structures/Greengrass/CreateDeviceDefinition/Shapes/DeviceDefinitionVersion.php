<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeviceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Device>|null $Devices
 */
class DeviceDefinitionVersion extends Shape
{
    /**
     * @param array{Devices?: list<Device>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
