<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_LINE_ATTRIBUTE'|'S3_LOCATION' $type
 * @property list<MetadataAttribute>|null $inlineAttributes
 * @property CustomS3Location|null $s3Location
 * @property list<DocumentAccessControlEntry>|null $accessControlList
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{
     *     type: 'IN_LINE_ATTRIBUTE'|'S3_LOCATION',
     *     inlineAttributes?: list<MetadataAttribute>|null,
     *     s3Location?: CustomS3Location|null,
     *     accessControlList?: list<DocumentAccessControlEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
