<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $lat
 * @property double $lon
 */
class IpGeoLocation extends Shape
{
    /**
     * @param array{
     *     lat?: double,
     *     lon?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
