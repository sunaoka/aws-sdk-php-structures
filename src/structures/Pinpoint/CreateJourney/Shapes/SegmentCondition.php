<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SegmentId
 */
class SegmentCondition extends Shape
{
    /**
     * @param array{SegmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
