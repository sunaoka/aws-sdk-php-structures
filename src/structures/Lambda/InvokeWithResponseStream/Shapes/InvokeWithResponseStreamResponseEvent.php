<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvokeResponseStreamUpdate|null $PayloadChunk
 * @property InvokeWithResponseStreamCompleteEvent|null $InvokeComplete
 */
class InvokeWithResponseStreamResponseEvent extends Shape
{
    /**
     * @param array{
     *     PayloadChunk?: InvokeResponseStreamUpdate|null,
     *     InvokeComplete?: InvokeWithResponseStreamCompleteEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
