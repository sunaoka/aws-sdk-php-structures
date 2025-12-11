<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProgramTrackSettings $programTrackSettings
 */
class TrackingOverrides extends Shape
{
    /**
     * @param array{programTrackSettings: ProgramTrackSettings} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
