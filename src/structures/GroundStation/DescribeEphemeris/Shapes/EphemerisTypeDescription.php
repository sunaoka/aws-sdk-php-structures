<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EphemerisDescription|null $oem
 * @property EphemerisDescription|null $tle
 */
class EphemerisTypeDescription extends Shape
{
    /**
     * @param array{
     *     oem?: EphemerisDescription|null,
     *     tle?: EphemerisDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
