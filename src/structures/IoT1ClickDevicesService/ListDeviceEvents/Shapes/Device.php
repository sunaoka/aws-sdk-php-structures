<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ListDeviceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attributes $Attributes
 * @property string $DeviceId
 * @property string $Type
 */
class Device extends Shape
{
    /**
     * @param array{
     *     Attributes?: Attributes,
     *     DeviceId?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
