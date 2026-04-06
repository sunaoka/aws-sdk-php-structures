<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ByteContentDoc|null $byteContent
 * @property TextContentDoc|null $textContent
 * @property 'BYTE'|'TEXT' $type
 */
class InlineContent extends Shape
{
    /**
     * @param array{
     *     byteContent?: ByteContentDoc|null,
     *     textContent?: TextContentDoc|null,
     *     type: 'BYTE'|'TEXT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
