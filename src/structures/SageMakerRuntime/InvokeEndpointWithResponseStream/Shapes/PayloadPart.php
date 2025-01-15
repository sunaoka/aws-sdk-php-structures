<?php

namespace Sunaoka\Aws\Structures\SageMakerRuntime\InvokeEndpointWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $Bytes
 */
class PayloadPart extends Shape
{
    /**
     * @param array{Bytes?: \Psr\Http\Message\StreamInterface|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
