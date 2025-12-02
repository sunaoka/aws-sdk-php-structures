<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contentType
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string $identifier
 */
class ByteContentDoc extends Shape
{
    /**
     * @param array{
     *     contentType: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
