<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string $mediaType
 */
class ByteContentFile extends Shape
{
    /**
     * @param array{
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     mediaType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
