<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Device $device
 * @property bool $compatible
 * @property list<IncompatibilityMessage> $incompatibilityMessages
 */
class DevicePoolCompatibilityResult extends Shape
{
    /**
     * @param array{
     *     device?: Device,
     *     compatible?: bool,
     *     incompatibilityMessages?: list<IncompatibilityMessage>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
