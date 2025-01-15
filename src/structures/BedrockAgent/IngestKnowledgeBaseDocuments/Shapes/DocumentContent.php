<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomContent|null $custom
 * @property 'CUSTOM'|'S3' $dataSourceType
 * @property S3Content|null $s3
 */
class DocumentContent extends Shape
{
    /**
     * @param array{
     *     custom?: CustomContent|null,
     *     dataSourceType: 'CUSTOM'|'S3',
     *     s3?: S3Content|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
