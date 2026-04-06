<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000>|null $MaxBuckets
 * @property string|null $ContinuationToken
 * @property string|null $Prefix
 * @property string|null $BucketRegion
 */
class ListBucketsRequest extends Request
{
    /**
     * @param array{
     *     MaxBuckets?: int<1, 10000>|null,
     *     ContinuationToken?: string|null,
     *     Prefix?: string|null,
     *     BucketRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
