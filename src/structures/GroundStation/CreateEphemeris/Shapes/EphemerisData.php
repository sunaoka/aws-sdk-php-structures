<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OEMEphemeris|null $oem
 * @property TLEEphemeris|null $tle
 */
class EphemerisData extends Shape
{
    /**
     * @param array{
     *     oem?: OEMEphemeris|null,
     *     tle?: TLEEphemeris|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
