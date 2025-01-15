<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property EventStartCondition|null $EventStartCondition
 * @property SegmentCondition|null $SegmentStartCondition
 */
class StartCondition extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     EventStartCondition?: EventStartCondition|null,
     *     SegmentStartCondition?: SegmentCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
