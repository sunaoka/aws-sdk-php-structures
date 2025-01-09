<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $BeginOffsetMillis
 * @property int<0, max> $EndOffsetMillis
 */
class PointOfInterest extends Shape
{
    /**
     * @param array{
     *     BeginOffsetMillis: int<0, max>,
     *     EndOffsetMillis: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
