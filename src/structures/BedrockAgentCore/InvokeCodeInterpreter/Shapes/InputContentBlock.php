<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property string|null $text
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $blob
 */
class InputContentBlock extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     text?: string|null,
     *     blob?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
