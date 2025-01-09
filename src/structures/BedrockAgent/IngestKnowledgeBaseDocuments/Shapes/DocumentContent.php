<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomContent $custom
 * @property 'CUSTOM'|'S3' $dataSourceType
 * @property S3Content $s3
 */
class DocumentContent extends Shape
{
    /**
     * @param array{
     *     custom?: CustomContent,
     *     dataSourceType: 'CUSTOM'|'S3',
     *     s3?: S3Content
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
