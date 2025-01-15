<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventFilter|null $EventFilter
 * @property string|null $SegmentId
 */
class EventStartCondition extends Shape
{
    /**
     * @param array{
     *     EventFilter?: EventFilter|null,
     *     SegmentId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
