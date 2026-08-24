<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Content
 * @property list<RealTimeContactAnalysisTranscriptItemWithCharacterOffsets> $PointsOfInterest
 */
class RealTimeContactAnalysisExtractedInformationValue extends Shape
{
    /**
     * @param array{
     *     Content: string,
     *     PointsOfInterest: list<RealTimeContactAnalysisTranscriptItemWithCharacterOffsets>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
