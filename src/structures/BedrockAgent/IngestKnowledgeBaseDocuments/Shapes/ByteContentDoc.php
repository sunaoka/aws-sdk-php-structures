<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 * @property string $mimeType
 */
class ByteContentDoc extends Shape
{
    /**
     * @param array{
     *     data: string|resource|\Psr\Http\Message\StreamInterface,
     *     mimeType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
