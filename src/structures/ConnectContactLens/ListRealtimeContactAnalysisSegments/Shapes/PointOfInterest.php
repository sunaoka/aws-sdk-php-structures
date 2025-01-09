<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BeginOffsetMillis
 * @property int $EndOffsetMillis
 */
class PointOfInterest extends Shape
{
    /**
     * @param array{
     *     BeginOffsetMillis: int,
     *     EndOffsetMillis: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
