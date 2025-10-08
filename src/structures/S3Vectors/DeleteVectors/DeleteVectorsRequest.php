<?php

namespace Sunaoka\Aws\Structures\S3Vectors\DeleteVectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $indexName
 * @property string|null $indexArn
 * @property list<string> $keys
 */
class DeleteVectorsRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     indexName?: string|null,
     *     indexArn?: string|null,
     *     keys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
