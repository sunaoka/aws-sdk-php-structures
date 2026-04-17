<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContactVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ephemerisId
 */
class TleProgramTrackSettings extends Shape
{
    /**
     * @param array{ephemerisId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
