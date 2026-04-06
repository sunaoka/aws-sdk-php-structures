<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceId
 * @property 'ACTIVE'|'SIGNED_OUT'|null $DeviceStatus
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string|null,
     *     DeviceStatus?: 'ACTIVE'|'SIGNED_OUT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
