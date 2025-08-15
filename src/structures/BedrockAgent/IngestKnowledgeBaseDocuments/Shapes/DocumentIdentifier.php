<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOM'|'S3' $dataSourceType
 * @property S3Location|null $s3
 * @property CustomDocumentIdentifier|null $custom
 */
class DocumentIdentifier extends Shape
{
    /**
     * @param array{
     *     dataSourceType: 'CUSTOM'|'S3',
     *     s3?: S3Location|null,
     *     custom?: CustomDocumentIdentifier|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
