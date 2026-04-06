<?php

namespace Sunaoka\Aws\Structures\S3Vectors\ListVectorBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 500>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $prefix
 */
class ListVectorBucketsRequest extends Request
{
    /**
     * @param array{
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
