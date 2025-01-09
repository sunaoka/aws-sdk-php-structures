<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $contentBlockIndex
 */
class ContentBlockStopEvent extends Shape
{
    /**
     * @param array{contentBlockIndex: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
