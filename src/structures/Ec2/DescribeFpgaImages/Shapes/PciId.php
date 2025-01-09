<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeviceId
 * @property string $VendorId
 * @property string $SubsystemId
 * @property string $SubsystemVendorId
 */
class PciId extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string,
     *     VendorId?: string,
     *     SubsystemId?: string,
     *     SubsystemVendorId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
