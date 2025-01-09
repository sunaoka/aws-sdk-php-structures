<?php

namespace Sunaoka\Aws\Structures\S3\ListDirectoryBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContinuationToken
 * @property int<0, 1000> $MaxDirectoryBuckets
 */
class ListDirectoryBucketsRequest extends Request
{
    /**
     * @param array{
     *     ContinuationToken?: string,
     *     MaxDirectoryBuckets?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
