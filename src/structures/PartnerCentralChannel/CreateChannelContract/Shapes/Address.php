<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\CreateChannelContract\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $city
 * @property string $stateOrRegion
 * @property string $postalCode
 * @property string $countryCode
 * @property string $addressLine
 * @property string|null $addressLine2
 */
class Address extends Shape
{
    /**
     * @param array{
     *     city: string,
     *     stateOrRegion: string,
     *     postalCode: string,
     *     countryCode: string,
     *     addressLine: string,
     *     addressLine2?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
