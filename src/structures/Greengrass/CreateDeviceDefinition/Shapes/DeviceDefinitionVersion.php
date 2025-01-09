<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateDeviceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Device> $Devices
 */
class DeviceDefinitionVersion extends Shape
{
    /**
     * @param array{Devices?: list<Device>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
