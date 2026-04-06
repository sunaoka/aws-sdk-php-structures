<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Content
 * @property string $Id
 * @property RealTimeContactAnalysisCharacterInterval|null $CharacterOffsets
 */
class RealTimeContactAnalysisTranscriptItemWithContent extends Shape
{
    /**
     * @param array{
     *     Content?: string|null,
     *     Id: string,
     *     CharacterOffsets?: RealTimeContactAnalysisCharacterInterval|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
