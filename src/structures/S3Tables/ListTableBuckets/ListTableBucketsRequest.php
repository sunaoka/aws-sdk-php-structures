<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTableBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $prefix
 * @property string|null $continuationToken
 * @property int<1, 1000>|null $maxBuckets
 */
class ListTableBucketsRequest extends Request
{
    /**
     * @param array{
     *     prefix?: string|null,
     *     continuationToken?: string|null,
     *     maxBuckets?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
