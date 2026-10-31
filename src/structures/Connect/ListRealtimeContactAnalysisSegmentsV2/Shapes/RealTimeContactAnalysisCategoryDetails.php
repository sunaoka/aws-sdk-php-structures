<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleId
 * @property list<RealTimeContactAnalysisPointOfInterest> $PointsOfInterest
 */
class RealTimeContactAnalysisCategoryDetails extends Shape
{
    /**
     * @param array{
     *     RuleId?: string|null,
     *     PointsOfInterest: list<RealTimeContactAnalysisPointOfInterest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
