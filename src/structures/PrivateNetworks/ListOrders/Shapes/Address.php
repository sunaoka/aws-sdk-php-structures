<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListOrders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $city
 * @property string $company
 * @property string $country
 * @property string $emailAddress
 * @property string $name
 * @property string $phoneNumber
 * @property string $postalCode
 * @property string $stateOrProvince
 * @property string $street1
 * @property string $street2
 * @property string $street3
 */
class Address extends Shape
{
    /**
     * @param array{
     *     city: string,
     *     company?: string,
     *     country: string,
     *     emailAddress?: string,
     *     name: string,
     *     phoneNumber?: string,
     *     postalCode: string,
     *     stateOrProvince: string,
     *     street1: string,
     *     street2?: string,
     *     street3?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
