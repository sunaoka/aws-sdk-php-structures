<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property City $City
 * @property Country $Country
 * @property GeoLocation $GeoLocation
 * @property string $IpAddressV4
 * @property string $IpAddressV6
 * @property Organization $Organization
 */
class RemoteIpDetails extends Shape
{
    /**
     * @param array{
     *     City?: City,
     *     Country?: Country,
     *     GeoLocation?: GeoLocation,
     *     IpAddressV4?: string,
     *     IpAddressV6?: string,
     *     Organization?: Organization
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
