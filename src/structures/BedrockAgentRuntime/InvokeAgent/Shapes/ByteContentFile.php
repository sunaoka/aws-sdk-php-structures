<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mediaType
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 */
class ByteContentFile extends Shape
{
    /**
     * @param array{
     *     mediaType: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
