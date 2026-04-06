<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ConfigureAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $elevation
 * @property 'AGL'|'AMSL'|null $elevationReference
 * @property 'FEET'|null $elevationUnit
 * @property double|null $latitude
 * @property double|null $longitude
 */
class Position extends Shape
{
    /**
     * @param array{
     *     elevation?: double|null,
     *     elevationReference?: 'AGL'|'AMSL'|null,
     *     elevationUnit?: 'FEET'|null,
     *     latitude?: double|null,
     *     longitude?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
