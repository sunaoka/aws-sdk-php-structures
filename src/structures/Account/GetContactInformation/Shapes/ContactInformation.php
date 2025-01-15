<?php

namespace Sunaoka\Aws\Structures\Account\GetContactInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddressLine1
 * @property string|null $AddressLine2
 * @property string|null $AddressLine3
 * @property string $City
 * @property string|null $CompanyName
 * @property string $CountryCode
 * @property string|null $DistrictOrCounty
 * @property string $FullName
 * @property string $PhoneNumber
 * @property string $PostalCode
 * @property string|null $StateOrRegion
 * @property string|null $WebsiteUrl
 */
class ContactInformation extends Shape
{
    /**
     * @param array{
     *     AddressLine1: string,
     *     AddressLine2?: string|null,
     *     AddressLine3?: string|null,
     *     City: string,
     *     CompanyName?: string|null,
     *     CountryCode: string,
     *     DistrictOrCounty?: string|null,
     *     FullName: string,
     *     PhoneNumber: string,
     *     PostalCode: string,
     *     StateOrRegion?: string|null,
     *     WebsiteUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
