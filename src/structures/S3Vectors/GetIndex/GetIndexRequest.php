<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $indexName
 * @property string|null $indexArn
 */
class GetIndexRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     indexName?: string|null,
     *     indexArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
