<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $data
 * @property string $mimeType
 */
class ByteContentDoc extends Shape
{
    /**
     * @param array{
     *     data: string,
     *     mimeType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
