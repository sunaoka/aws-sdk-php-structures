<?php

namespace Sunaoka\Aws\Structures\S3\ListDirectoryBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ContinuationToken
 * @property int<0, 1000>|null $MaxDirectoryBuckets
 */
class ListDirectoryBucketsRequest extends Request
{
    /**
     * @param array{
     *     ContinuationToken?: string|null,
     *     MaxDirectoryBuckets?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
