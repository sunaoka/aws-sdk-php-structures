<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOM'|'S3' $dataSourceType
 * @property CustomContent|null $custom
 * @property S3Content|null $s3
 */
class DocumentContent extends Shape
{
    /**
     * @param array{
     *     dataSourceType: 'CUSTOM'|'S3',
     *     custom?: CustomContent|null,
     *     s3?: S3Content|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
