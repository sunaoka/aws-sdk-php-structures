<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeVTLDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VTLDeviceARN
 * @property string|null $VTLDeviceType
 * @property string|null $VTLDeviceVendor
 * @property string|null $VTLDeviceProductIdentifier
 * @property DeviceiSCSIAttributes|null $DeviceiSCSIAttributes
 */
class VTLDevice extends Shape
{
    /**
     * @param array{
     *     VTLDeviceARN?: string|null,
     *     VTLDeviceType?: string|null,
     *     VTLDeviceVendor?: string|null,
     *     VTLDeviceProductIdentifier?: string|null,
     *     DeviceiSCSIAttributes?: DeviceiSCSIAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
