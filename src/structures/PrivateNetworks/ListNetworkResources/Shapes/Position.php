<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworkResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $elevation
 * @property 'AGL'|'AMSL' $elevationReference
 * @property 'FEET' $elevationUnit
 * @property double $latitude
 * @property double $longitude
 */
class Position extends Shape
{
    /**
     * @param array{
     *     elevation?: double,
     *     elevationReference?: 'AGL'|'AMSL',
     *     elevationUnit?: 'FEET',
     *     latitude?: double,
     *     longitude?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
