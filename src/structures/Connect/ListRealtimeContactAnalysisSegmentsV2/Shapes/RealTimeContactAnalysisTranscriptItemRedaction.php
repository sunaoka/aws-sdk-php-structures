<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RealTimeContactAnalysisCharacterInterval>|null $CharacterOffsets
 */
class RealTimeContactAnalysisTranscriptItemRedaction extends Shape
{
    /**
     * @param array{CharacterOffsets?: list<RealTimeContactAnalysisCharacterInterval>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
