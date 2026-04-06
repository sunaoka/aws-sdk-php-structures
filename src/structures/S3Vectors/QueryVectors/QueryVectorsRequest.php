<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $indexName
 * @property string|null $indexArn
 * @property int<1, max> $topK
 * @property Shapes\VectorData $queryVector
 * @property Shapes\Document|null $filter
 * @property bool|null $returnMetadata
 * @property bool|null $returnDistance
 */
class QueryVectorsRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     indexName?: string|null,
     *     indexArn?: string|null,
     *     topK: int<1, max>,
     *     queryVector: Shapes\VectorData,
     *     filter?: Shapes\Document|null,
     *     returnMetadata?: bool|null,
     *     returnDistance?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
