<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDocumentIdentifier $custom
 * @property 'CUSTOM'|'S3' $dataSourceType
 * @property S3Location $s3
 */
class DocumentIdentifier extends Shape
{
    /**
     * @param array{
     *     custom?: CustomDocumentIdentifier,
     *     dataSourceType: 'CUSTOM'|'S3',
     *     s3?: S3Location
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
