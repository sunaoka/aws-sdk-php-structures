<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $AbsoluteTime
 */
class RealTimeContactAnalysisTimeData extends Shape
{
    /**
     * @param array{AbsoluteTime?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
