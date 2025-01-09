<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RealTimeContactAnalysisTranscriptItemWithCharacterOffsets> $TranscriptItems
 */
class RealTimeContactAnalysisPointOfInterest extends Shape
{
    /**
     * @param array{TranscriptItems?: list<RealTimeContactAnalysisTranscriptItemWithCharacterOffsets>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
