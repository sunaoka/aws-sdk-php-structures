<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OEMEphemeris $oem
 * @property TLEEphemeris $tle
 */
class EphemerisData extends Shape
{
    /**
     * @param array{
     *     oem?: OEMEphemeris,
     *     tle?: TLEEphemeris
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
