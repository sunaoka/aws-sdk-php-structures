<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpenLineageRunEventSummary $openLineageRunEventSummary
 */
class EventSummary extends Shape
{
    /**
     * @param array{openLineageRunEventSummary?: OpenLineageRunEventSummary} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
