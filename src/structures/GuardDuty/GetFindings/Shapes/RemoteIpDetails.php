<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property City|null $City
 * @property Country|null $Country
 * @property GeoLocation|null $GeoLocation
 * @property string|null $IpAddressV4
 * @property string|null $IpAddressV6
 * @property Organization|null $Organization
 */
class RemoteIpDetails extends Shape
{
    /**
     * @param array{
     *     City?: City|null,
     *     Country?: Country|null,
     *     GeoLocation?: GeoLocation|null,
     *     IpAddressV4?: string|null,
     *     IpAddressV6?: string|null,
     *     Organization?: Organization|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
