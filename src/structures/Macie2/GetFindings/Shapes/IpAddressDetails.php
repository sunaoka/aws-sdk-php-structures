<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ipAddressV4
 * @property IpCity $ipCity
 * @property IpCountry $ipCountry
 * @property IpGeoLocation $ipGeoLocation
 * @property IpOwner $ipOwner
 */
class IpAddressDetails extends Shape
{
    /**
     * @param array{
     *     ipAddressV4?: string,
     *     ipCity?: IpCity,
     *     ipCountry?: IpCountry,
     *     ipGeoLocation?: IpGeoLocation,
     *     ipOwner?: IpOwner
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
