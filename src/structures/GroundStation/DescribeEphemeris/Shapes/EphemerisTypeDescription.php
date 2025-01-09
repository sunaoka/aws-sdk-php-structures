<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EphemerisDescription $oem
 * @property EphemerisDescription $tle
 */
class EphemerisTypeDescription extends Shape
{
    /**
     * @param array{
     *     oem?: EphemerisDescription,
     *     tle?: EphemerisDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
