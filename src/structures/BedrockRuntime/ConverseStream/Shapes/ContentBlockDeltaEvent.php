<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentBlockDelta $delta
 * @property int<0, max> $contentBlockIndex
 */
class ContentBlockDeltaEvent extends Shape
{
    /**
     * @param array{
     *     delta: ContentBlockDelta,
     *     contentBlockIndex: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
