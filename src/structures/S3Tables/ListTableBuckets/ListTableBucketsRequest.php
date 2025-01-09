<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTableBuckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $prefix
 * @property string $continuationToken
 * @property int $maxBuckets
 */
class ListTableBucketsRequest extends Request
{
    /**
     * @param array{
     *     prefix?: string,
     *     continuationToken?: string,
     *     maxBuckets?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
