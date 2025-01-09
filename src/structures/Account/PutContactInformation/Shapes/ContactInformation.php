<?php

namespace Sunaoka\Aws\Structures\Account\PutContactInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressLine1
 * @property string $AddressLine2
 * @property string $AddressLine3
 * @property string $City
 * @property string $CompanyName
 * @property string $CountryCode
 * @property string $DistrictOrCounty
 * @property string $FullName
 * @property string $PhoneNumber
 * @property string $PostalCode
 * @property string $StateOrRegion
 * @property string $WebsiteUrl
 */
class ContactInformation extends Shape
{
    /**
     * @param array{
     *     AddressLine1: string,
     *     AddressLine2?: string,
     *     AddressLine3?: string,
     *     City: string,
     *     CompanyName?: string,
     *     CountryCode: string,
     *     DistrictOrCounty?: string,
     *     FullName: string,
     *     PhoneNumber: string,
     *     PostalCode: string,
     *     StateOrRegion?: string,
     *     WebsiteUrl?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
