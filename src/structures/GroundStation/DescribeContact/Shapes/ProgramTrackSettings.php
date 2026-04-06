<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzElProgramTrackSettings|null $azEl
 */
class ProgramTrackSettings extends Shape
{
    /**
     * @param array{azEl?: AzElProgramTrackSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
