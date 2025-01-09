<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Transcript $Transcript
 * @property Categories $Categories
 * @property PostContactSummary $PostContactSummary
 */
class RealtimeContactAnalysisSegment extends Shape
{
    /**
     * @param array{
     *     Transcript?: Transcript,
     *     Categories?: Categories,
     *     PostContactSummary?: PostContactSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
