<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Content
 * @property string $Id
 * @property RealTimeContactAnalysisCharacterInterval $CharacterOffsets
 */
class RealTimeContactAnalysisTranscriptItemWithContent extends Shape
{
    /**
     * @param array{
     *     Content?: string,
     *     Id: string,
     *     CharacterOffsets?: RealTimeContactAnalysisCharacterInterval
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
