<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ipAddressV4
 * @property IpCity|null $ipCity
 * @property IpCountry|null $ipCountry
 * @property IpGeoLocation|null $ipGeoLocation
 * @property IpOwner|null $ipOwner
 */
class IpAddressDetails extends Shape
{
    /**
     * @param array{
     *     ipAddressV4?: string|null,
     *     ipCity?: IpCity|null,
     *     ipCountry?: IpCountry|null,
     *     ipGeoLocation?: IpGeoLocation|null,
     *     ipOwner?: IpOwner|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
