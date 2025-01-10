<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $bytes
 * @property string $name
 * @property string $type
 */
class OutputFile extends Shape
{
    /**
     * @param array{
     *     bytes?: \Psr\Http\Message\StreamInterface,
     *     name?: string,
     *     type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
