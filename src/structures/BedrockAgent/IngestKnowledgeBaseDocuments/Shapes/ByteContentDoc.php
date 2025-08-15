<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mimeType
 * @property string|resource|\Psr\Http\Message\StreamInterface $data
 */
class ByteContentDoc extends Shape
{
    /**
     * @param array{
     *     mimeType: string,
     *     data: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
