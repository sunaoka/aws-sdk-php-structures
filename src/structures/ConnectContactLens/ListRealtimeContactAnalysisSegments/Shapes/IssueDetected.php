<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CharacterOffsets $CharacterOffsets
 */
class IssueDetected extends Shape
{
    /**
     * @param array{CharacterOffsets: CharacterOffsets} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
