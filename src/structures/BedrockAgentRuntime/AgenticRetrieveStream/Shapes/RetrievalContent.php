<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface|null $byteContent
 * @property string $mimeType
 * @property string|null $text
 */
class RetrievalContent extends Shape
{
    /**
     * @param array{
     *     byteContent?: \Psr\Http\Message\StreamInterface|null,
     *     mimeType: string,
     *     text?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
