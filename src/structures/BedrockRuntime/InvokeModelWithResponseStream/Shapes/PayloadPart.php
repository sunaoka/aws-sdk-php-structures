<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $bytes
 */
class PayloadPart extends Shape
{
    /**
     * @param array{bytes?: \Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
