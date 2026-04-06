<?php

namespace Sunaoka\Aws\Structures\S3Control\ListAccessPointsForDirectoryBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $DirectoryBucket
 * @property string|null $NextToken
 * @property int<0, 1000>|null $MaxResults
 */
class ListAccessPointsForDirectoryBucketsRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     DirectoryBucket?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
