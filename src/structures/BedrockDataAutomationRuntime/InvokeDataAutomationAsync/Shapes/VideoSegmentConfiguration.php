<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TimestampSegment|null $timestampSegment
 */
class VideoSegmentConfiguration extends Shape
{
    /**
     * @param array{timestampSegment?: TimestampSegment|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
