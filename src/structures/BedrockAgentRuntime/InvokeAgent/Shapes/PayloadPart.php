<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attribution|null $attribution
 * @property \Psr\Http\Message\StreamInterface|null $bytes
 */
class PayloadPart extends Shape
{
    /**
     * @param array{
     *     attribution?: Attribution|null,
     *     bytes?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
