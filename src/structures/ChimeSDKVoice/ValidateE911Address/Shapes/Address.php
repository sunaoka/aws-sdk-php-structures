<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ValidateE911Address\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $streetName
 * @property string $streetSuffix
 * @property string $postDirectional
 * @property string $preDirectional
 * @property string $streetNumber
 * @property string $city
 * @property string $state
 * @property string $postalCode
 * @property string $postalCodePlus4
 * @property string $country
 */
class Address extends Shape
{
    /**
     * @param array{
     *     streetName?: string,
     *     streetSuffix?: string,
     *     postDirectional?: string,
     *     preDirectional?: string,
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
