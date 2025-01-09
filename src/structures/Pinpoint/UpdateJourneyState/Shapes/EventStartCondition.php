<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventFilter $EventFilter
 * @property string $SegmentId
 */
class EventStartCondition extends Shape
{
    /**
     * @param array{
     *     EventFilter?: EventFilter,
     *     SegmentId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
