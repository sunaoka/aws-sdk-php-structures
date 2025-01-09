<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentBlockDelta $delta
 * @property int $contentBlockIndex
 */
class ContentBlockDeltaEvent extends Shape
{
    /**
     * @param array{
     *     delta: ContentBlockDelta,
     *     contentBlockIndex: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
