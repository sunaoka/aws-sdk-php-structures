<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVpnConnectionDeviceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpnConnectionDeviceTypeId
 * @property string|null $Vendor
 * @property string|null $Platform
 * @property string|null $Software
 */
class VpnConnectionDeviceType extends Shape
{
    /**
     * @param array{
     *     VpnConnectionDeviceTypeId?: string|null,
     *     Vendor?: string|null,
     *     Platform?: string|null,
     *     Software?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
