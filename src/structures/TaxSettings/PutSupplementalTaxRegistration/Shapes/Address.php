<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutSupplementalTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $addressLine1
 * @property string $addressLine2
 * @property string $addressLine3
 * @property string $city
 * @property string $countryCode
 * @property string $districtOrCounty
 * @property string $postalCode
 * @property string $stateOrRegion
 */
class Address extends Shape
{
    /**
     * @param array{
     *     addressLine1: string,
     *     addressLine2?: string,
     *     addressLine3?: string,
     *     city: string,
     *     countryCode: string,
     *     districtOrCounty?: string,
     *     postalCode: string,
     *     stateOrRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
