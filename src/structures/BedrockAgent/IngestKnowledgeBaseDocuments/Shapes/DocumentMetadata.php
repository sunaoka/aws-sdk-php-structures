<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MetadataAttribute>|null $inlineAttributes
 * @property CustomS3Location|null $s3Location
 * @property 'IN_LINE_ATTRIBUTE'|'S3_LOCATION' $type
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{
     *     inlineAttributes?: list<MetadataAttribute>|null,
     *     s3Location?: CustomS3Location|null,
     *     type: 'IN_LINE_ATTRIBUTE'|'S3_LOCATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
