<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 10000> $MaxBuckets
 * @property string $ContinuationToken
 * @property string $Prefix
 * @property string $BucketRegion
 */
class ListBucketsRequest extends Request
{
    /**
     * @param array{
     *     MaxBuckets?: int<1, 10000>,
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
