<?php

namespace Sunaoka\Aws\Structures\Outposts\GetSiteAddress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactName
 * @property string $ContactPhoneNumber
 * @property string $AddressLine1
 * @property string $AddressLine2
 * @property string $AddressLine3
 * @property string $City
 * @property string $StateOrRegion
 * @property string $DistrictOrCounty
 * @property string $PostalCode
 * @property string $CountryCode
 * @property string $Municipality
 */
class Address extends Shape
{
    /**
     * @param array{
     *     ContactName?: string,
     *     ContactPhoneNumber?: string,
     *     AddressLine1: string,
     *     AddressLine2?: string,
     *     AddressLine3?: string,
     *     City: string,
     *     StateOrRegion: string,
     *     DistrictOrCounty?: string,
     *     PostalCode: string,
     *     CountryCode: string,
     *     Municipality?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
