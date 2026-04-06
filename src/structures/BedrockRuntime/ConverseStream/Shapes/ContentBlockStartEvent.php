<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContentBlockStart $start
 * @property int<0, max> $contentBlockIndex
 */
class ContentBlockStartEvent extends Shape
{
    /**
     * @param array{
     *     start: ContentBlockStart,
     *     contentBlockIndex: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
