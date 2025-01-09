<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpnConnectionDeviceTypeId
 * @property string $Vendor
 * @property string $Platform
 * @property string $Software
 */
class VpnConnectionDeviceType extends Shape
{
    /**
     * @param array{
     *     VpnConnectionDeviceTypeId?: string,
     *     Vendor?: string,
     *     Platform?: string,
     *     Software?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
