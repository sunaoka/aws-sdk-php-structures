<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BYTE'|'TEXT' $type
 * @property ByteContentDoc|null $byteContent
 * @property TextContentDoc|null $textContent
 */
class InlineContent extends Shape
{
    /**
     * @param array{
     *     type: 'BYTE'|'TEXT',
     *     byteContent?: ByteContentDoc|null,
     *     textContent?: TextContentDoc|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
