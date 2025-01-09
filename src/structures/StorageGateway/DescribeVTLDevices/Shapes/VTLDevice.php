<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeVTLDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VTLDeviceARN
 * @property string $VTLDeviceType
 * @property string $VTLDeviceVendor
 * @property string $VTLDeviceProductIdentifier
 * @property DeviceiSCSIAttributes $DeviceiSCSIAttributes
 */
class VTLDevice extends Shape
{
    /**
     * @param array{
     *     VTLDeviceARN?: string,
     *     VTLDeviceType?: string,
     *     VTLDeviceVendor?: string,
     *     VTLDeviceProductIdentifier?: string,
     *     DeviceiSCSIAttributes?: DeviceiSCSIAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
