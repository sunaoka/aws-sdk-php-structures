<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $type
 * @property \Psr\Http\Message\StreamInterface|null $bytes
 */
class OutputFile extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: string|null,
     *     bytes?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
