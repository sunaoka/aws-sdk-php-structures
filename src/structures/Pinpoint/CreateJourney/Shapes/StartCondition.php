<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property EventStartCondition $EventStartCondition
 * @property SegmentCondition $SegmentStartCondition
 */
class StartCondition extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     EventStartCondition?: EventStartCondition,
     *     SegmentStartCondition?: SegmentCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
