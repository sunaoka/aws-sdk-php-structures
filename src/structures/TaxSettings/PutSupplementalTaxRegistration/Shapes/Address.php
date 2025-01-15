<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutSupplementalTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $addressLine1
 * @property string|null $addressLine2
 * @property string|null $addressLine3
 * @property string $city
 * @property string $countryCode
 * @property string|null $districtOrCounty
 * @property string $postalCode
 * @property string|null $stateOrRegion
 */
class Address extends Shape
{
    /**
     * @param array{
     *     addressLine1: string,
     *     addressLine2?: string|null,
     *     addressLine3?: string|null,
     *     city: string,
     *     countryCode: string,
     *     districtOrCounty?: string|null,
     *     postalCode: string,
     *     stateOrRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
