<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddressV4
 * @property IpOrganizationDetails|null $Organization
 * @property Country|null $Country
 * @property City|null $City
 * @property GeoLocation|null $GeoLocation
 */
class ActionRemoteIpDetails extends Shape
{
    /**
     * @param array{
     *     IpAddressV4?: string|null,
     *     Organization?: IpOrganizationDetails|null,
     *     Country?: Country|null,
     *     City?: City|null,
     *     GeoLocation?: GeoLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
