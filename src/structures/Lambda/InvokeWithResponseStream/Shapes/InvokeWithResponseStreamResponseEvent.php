<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvokeResponseStreamUpdate $PayloadChunk
 * @property InvokeWithResponseStreamCompleteEvent $InvokeComplete
 */
class InvokeWithResponseStreamResponseEvent extends Shape
{
    /**
     * @param array{
     *     PayloadChunk?: InvokeResponseStreamUpdate,
     *     InvokeComplete?: InvokeWithResponseStreamCompleteEvent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
