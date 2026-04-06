<?php

namespace Sunaoka\Aws\Structures\Outposts\GetSiteAddress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactName
 * @property string|null $ContactPhoneNumber
 * @property string $AddressLine1
 * @property string|null $AddressLine2
 * @property string|null $AddressLine3
 * @property string $City
 * @property string $StateOrRegion
 * @property string|null $DistrictOrCounty
 * @property string $PostalCode
 * @property string $CountryCode
 * @property string|null $Municipality
 */
class Address extends Shape
{
    /**
     * @param array{
     *     ContactName?: string|null,
     *     ContactPhoneNumber?: string|null,
     *     AddressLine1: string,
     *     AddressLine2?: string|null,
     *     AddressLine3?: string|null,
     *     City: string,
     *     StateOrRegion: string,
     *     DistrictOrCounty?: string|null,
     *     PostalCode: string,
     *     CountryCode: string,
     *     Municipality?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
