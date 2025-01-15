<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $city
 * @property string|null $company
 * @property string $country
 * @property string|null $emailAddress
 * @property string $name
 * @property string|null $phoneNumber
 * @property string $postalCode
 * @property string $stateOrProvince
 * @property string $street1
 * @property string|null $street2
 * @property string|null $street3
 */
class Address extends Shape
{
    /**
     * @param array{
     *     city: string,
     *     company?: string|null,
     *     country: string,
     *     emailAddress?: string|null,
     *     name: string,
     *     phoneNumber?: string|null,
     *     postalCode: string,
     *     stateOrProvince: string,
     *     street1: string,
     *     street2?: string|null,
     *     street3?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
