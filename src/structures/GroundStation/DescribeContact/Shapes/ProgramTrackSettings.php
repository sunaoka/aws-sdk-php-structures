<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzElProgramTrackSettings|null $azEl
 * @property OemProgramTrackSettings|null $oem
 * @property TleProgramTrackSettings|null $tle
 */
class ProgramTrackSettings extends Shape
{
    /**
     * @param array{
     *     azEl?: AzElProgramTrackSettings|null,
     *     oem?: OemProgramTrackSettings|null,
     *     tle?: TleProgramTrackSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
