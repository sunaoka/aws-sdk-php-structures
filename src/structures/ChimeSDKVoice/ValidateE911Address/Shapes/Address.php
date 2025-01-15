<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ValidateE911Address\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $streetName
 * @property string|null $streetSuffix
 * @property string|null $postDirectional
 * @property string|null $preDirectional
 * @property string|null $streetNumber
 * @property string|null $city
 * @property string|null $state
 * @property string|null $postalCode
 * @property string|null $postalCodePlus4
 * @property string|null $country
 */
class Address extends Shape
{
    /**
     * @param array{
     *     streetName?: string|null,
     *     streetSuffix?: string|null,
     *     postDirectional?: string|null,
     *     preDirectional?: string|null,
     *     streetNumber?: string|null,
     *     city?: string|null,
     *     state?: string|null,
     *     postalCode?: string|null,
     *     postalCodePlus4?: string|null,
     *     country?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
