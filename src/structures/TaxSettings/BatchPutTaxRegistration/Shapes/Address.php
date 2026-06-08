<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $addressLine1
 * @property string|null $addressLine2
 * @property string|null $addressLine3
 * @property string|null $districtOrCounty
 * @property string|null $city
 * @property string|null $stateOrRegion
 * @property string $postalCode
 * @property string $countryCode
 */
class Address extends Shape
{
    /**
     * @param array{
     *     addressLine1?: string|null,
     *     addressLine2?: string|null,
     *     addressLine3?: string|null,
     *     districtOrCounty?: string|null,
     *     city?: string|null,
     *     stateOrRegion?: string|null,
     *     postalCode: string,
     *     countryCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
