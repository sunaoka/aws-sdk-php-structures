<?php

namespace Sunaoka\Aws\Structures\Connect\ListRealtimeContactAnalysisSegmentsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $BeginOffsetChar
 * @property int<0, max> $EndOffsetChar
 */
class RealTimeContactAnalysisCharacterInterval extends Shape
{
    /**
     * @param array{
     *     BeginOffsetChar: int<0, max>,
     *     EndOffsetChar: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
