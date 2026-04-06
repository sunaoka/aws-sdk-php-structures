<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property MetadataAttributeValue $value
 */
class MetadataAttribute extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: MetadataAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
