<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddressV4
 * @property IpOrganizationDetails $Organization
 * @property Country $Country
 * @property City $City
 * @property GeoLocation $GeoLocation
 */
class ActionRemoteIpDetails extends Shape
{
    /**
     * @param array{
     *     IpAddressV4?: string,
     *     Organization?: IpOrganizationDetails,
     *     Country?: Country,
     *     City?: City,
     *     GeoLocation?: GeoLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
