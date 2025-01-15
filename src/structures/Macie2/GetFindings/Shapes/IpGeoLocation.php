<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $lat
 * @property double|null $lon
 */
class IpGeoLocation extends Shape
{
    /**
     * @param array{
     *     lat?: double|null,
     *     lon?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
