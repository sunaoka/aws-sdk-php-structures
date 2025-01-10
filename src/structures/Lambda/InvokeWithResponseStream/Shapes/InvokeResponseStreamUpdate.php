<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Payload
 */
class InvokeResponseStreamUpdate extends Shape
{
    /**
     * @param array{Payload?: string|resource|\Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
