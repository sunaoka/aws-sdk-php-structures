<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ephemerisId
 */
class OemProgramTrackSettings extends Shape
{
    /**
     * @param array{ephemerisId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
