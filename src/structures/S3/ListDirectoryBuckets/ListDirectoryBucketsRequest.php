<?php

namespace Sunaoka\Aws\Structures\S3\ListDirectoryBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContinuationToken
 * @property int $MaxDirectoryBuckets
 */
class ListDirectoryBucketsRequest extends Request
{
    /**
     * @param array{
     *     ContinuationToken?: string,
     *     MaxDirectoryBuckets?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
