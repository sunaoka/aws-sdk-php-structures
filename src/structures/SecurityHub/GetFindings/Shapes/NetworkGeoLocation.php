<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $City
 * @property string $Country
 * @property double $Lat
 * @property double $Lon
 */
class NetworkGeoLocation extends Shape
{
    /**
     * @param array{
     *     City?: string,
     *     Country?: string,
     *     Lat?: double,
     *     Lon?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
