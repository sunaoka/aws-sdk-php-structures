<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Lon
 * @property double $Lat
 */
class GeoLocation extends Shape
{
    /**
     * @param array{
     *     Lon?: double,
     *     Lat?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
