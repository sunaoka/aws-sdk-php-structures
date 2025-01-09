<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Lat
 * @property double $Lon
 */
class GeoLocation extends Shape
{
    /**
     * @param array{
     *     Lat?: double,
     *     Lon?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
