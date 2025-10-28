<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EphemerisDescription|null $tle
 * @property EphemerisDescription|null $oem
 * @property EphemerisDescription|null $azEl
 */
class EphemerisTypeDescription extends Shape
{
    /**
     * @param array{
     *     tle?: EphemerisDescription|null,
     *     oem?: EphemerisDescription|null,
     *     azEl?: EphemerisDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
