<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFpgaImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeviceId
 * @property string|null $VendorId
 * @property string|null $SubsystemId
 * @property string|null $SubsystemVendorId
 */
class PciId extends Shape
{
    /**
     * @param array{
     *     DeviceId?: string|null,
     *     VendorId?: string|null,
     *     SubsystemId?: string|null,
     *     SubsystemVendorId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
