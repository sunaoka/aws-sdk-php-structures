<?php

namespace Sunaoka\Aws\Structures\S3Vectors\PutVectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $indexName
 * @property string|null $indexArn
 * @property list<Shapes\PutInputVector> $vectors
 */
class PutVectorsRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     indexName?: string|null,
     *     indexArn?: string|null,
     *     vectors: list<Shapes\PutInputVector>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
