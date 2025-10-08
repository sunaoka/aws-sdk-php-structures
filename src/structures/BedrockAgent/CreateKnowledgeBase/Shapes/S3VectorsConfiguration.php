<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vectorBucketArn
 * @property string|null $indexArn
 * @property string|null $indexName
 */
class S3VectorsConfiguration extends Shape
{
    /**
     * @param array{
     *     vectorBucketArn?: string|null,
     *     indexArn?: string|null,
     *     indexName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
