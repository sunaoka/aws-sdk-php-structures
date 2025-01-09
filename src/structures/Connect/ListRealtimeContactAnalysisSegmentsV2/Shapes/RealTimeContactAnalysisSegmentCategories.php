<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, RealTimeContactAnalysisCategoryDetails> $MatchedDetails
 */
class RealTimeContactAnalysisSegmentCategories extends Shape
{
    /**
     * @param array{MatchedDetails: array<string, RealTimeContactAnalysisCategoryDetails>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
