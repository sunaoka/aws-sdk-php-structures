<?php

namespace Sunaoka\Aws\Structures\Chime\ValidateE911Address\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streetInfo
 * @property string $streetNumber
 * @property string $city
 * @property string $state
 * @property string $postalCode
 * @property string $postalCodePlus4
 * @property string $country
 */
class CandidateAddress extends Shape
{
    /**
     * @param array{
     *     streetInfo?: string,
     *     streetNumber?: string,
     *     city?: string,
     *     state?: string,
     *     postalCode?: string,
     *     postalCodePlus4?: string,
     *     country?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
