<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByteContentDoc $byteContent
 * @property TextContentDoc $textContent
 * @property 'BYTE'|'TEXT' $type
 */
class InlineContent extends Shape
{
    /**
     * @param array{
     *     byteContent?: ByteContentDoc,
     *     textContent?: TextContentDoc,
     *     type: 'BYTE'|'TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
