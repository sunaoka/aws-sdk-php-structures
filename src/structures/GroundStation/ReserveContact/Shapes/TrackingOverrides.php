<?php

namespace Sunaoka\Aws\Structures\GroundStation\ReserveContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgramTrackSettings|null $programTrackSettings
 */
class TrackingOverrides extends Shape
{
    /**
     * @param array{programTrackSettings?: ProgramTrackSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
