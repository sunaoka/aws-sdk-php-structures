<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ListDeviceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attributes|null $Attributes
 * @property string|null $DeviceId
 * @property string|null $Type
 */
class Device extends Shape
{
    /**
     * @param array{
     *     Attributes?: Attributes|null,
     *     DeviceId?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
