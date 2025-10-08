<?php

namespace Sunaoka\Aws\Structures\S3Vectors\ListIndexes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $vectorBucketArn
 * @property int<1, 500>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $prefix
 */
class ListIndexesRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     vectorBucketArn?: string|null,
     *     maxResults?: int<1, 500>|null,
     *     nextToken?: string|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
