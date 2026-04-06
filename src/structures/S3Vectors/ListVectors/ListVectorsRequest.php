<?php

namespace Sunaoka\Aws\Structures\S3Vectors\ListVectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $indexName
 * @property string|null $indexArn
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property int<1, 16>|null $segmentCount
 * @property int<0, 15>|null $segmentIndex
 * @property bool|null $returnData
 * @property bool|null $returnMetadata
 */
class ListVectorsRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     indexName?: string|null,
     *     indexArn?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     segmentCount?: int<1, 16>|null,
     *     segmentIndex?: int<0, 15>|null,
     *     returnData?: bool|null,
     *     returnMetadata?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
