<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RealTimeContactAnalysisPointOfInterest> $PointsOfInterest
 */
class RealTimeContactAnalysisCategoryDetails extends Shape
{
    /**
     * @param array{PointsOfInterest: list<RealTimeContactAnalysisPointOfInterest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
