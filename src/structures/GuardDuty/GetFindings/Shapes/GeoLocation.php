<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Lat
 * @property double|null $Lon
 */
class GeoLocation extends Shape
{
    /**
     * @param array{
     *     Lat?: double|null,
     *     Lon?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
