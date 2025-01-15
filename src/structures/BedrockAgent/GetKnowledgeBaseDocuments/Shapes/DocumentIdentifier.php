<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomDocumentIdentifier|null $custom
 * @property 'CUSTOM'|'S3' $dataSourceType
 * @property S3Location|null $s3
 */
class DocumentIdentifier extends Shape
{
    /**
     * @param array{
     *     custom?: CustomDocumentIdentifier|null,
     *     dataSourceType: 'CUSTOM'|'S3',
     *     s3?: S3Location|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
