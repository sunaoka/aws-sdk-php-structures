<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $BeginOffsetChar
 * @property int $EndOffsetChar
 */
class RealTimeContactAnalysisCharacterInterval extends Shape
{
    /**
     * @param array{
     *     BeginOffsetChar: int,
     *     EndOffsetChar: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
