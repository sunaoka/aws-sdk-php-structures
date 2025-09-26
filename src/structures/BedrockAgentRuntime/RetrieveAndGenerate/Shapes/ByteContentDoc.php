<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $contentType
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 */
class ByteContentDoc extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     contentType: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
