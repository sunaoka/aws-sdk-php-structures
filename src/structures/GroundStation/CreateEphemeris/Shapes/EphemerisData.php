<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TLEEphemeris|null $tle
 * @property OEMEphemeris|null $oem
 * @property AzElEphemeris|null $azEl
 */
class EphemerisData extends Shape
{
    /**
     * @param array{
     *     tle?: TLEEphemeris|null,
     *     oem?: OEMEphemeris|null,
     *     azEl?: AzElEphemeris|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
