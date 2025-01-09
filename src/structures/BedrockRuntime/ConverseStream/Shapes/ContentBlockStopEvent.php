<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $contentBlockIndex
 */
class ContentBlockStopEvent extends Shape
{
    /**
     * @param array{contentBlockIndex: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
