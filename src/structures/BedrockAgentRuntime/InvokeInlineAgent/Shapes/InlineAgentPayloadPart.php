<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $bytes
 * @property Attribution|null $attribution
 */
class InlineAgentPayloadPart extends Shape
{
    /**
     * @param array{
     *     bytes?: \Psr\Http\Message\StreamInterface|null,
     *     attribution?: Attribution|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
