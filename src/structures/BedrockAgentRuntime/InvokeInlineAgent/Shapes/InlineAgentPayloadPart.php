<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attribution $attribution
 * @property \Psr\Http\Message\StreamInterface $bytes
 */
class InlineAgentPayloadPart extends Shape
{
    /**
     * @param array{
     *     attribution?: Attribution,
     *     bytes?: \Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
