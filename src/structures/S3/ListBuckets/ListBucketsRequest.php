<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxBuckets
 * @property string $ContinuationToken
 * @property string $Prefix
 * @property string $BucketRegion
 */
class ListBucketsRequest extends Request
{
    /**
     * @param array{
     *     MaxBuckets?: int,
     *     ContinuationToken?: string,
     *     Prefix?: string,
     *     BucketRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
