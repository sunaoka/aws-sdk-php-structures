<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Device|null $device
 * @property bool|null $compatible
 * @property list<IncompatibilityMessage>|null $incompatibilityMessages
 */
class DevicePoolCompatibilityResult extends Shape
{
    /**
     * @param array{
     *     device?: Device|null,
     *     compatible?: bool|null,
     *     incompatibilityMessages?: list<IncompatibilityMessage>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
