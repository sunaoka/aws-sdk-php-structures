<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property RealTimeContactAnalysisCharacterInterval $CharacterOffsets
 */
class RealTimeContactAnalysisTranscriptItemWithCharacterOffsets extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     CharacterOffsets?: RealTimeContactAnalysisCharacterInterval
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
