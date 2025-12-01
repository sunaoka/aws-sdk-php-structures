<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $bytes
 * @property string|null $name
 * @property string|null $type
 */
class OutputFile extends Shape
{
    /**
     * @param array{
     *     bytes?: \Psr\Http\Message\StreamInterface|null,
     *     name?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
