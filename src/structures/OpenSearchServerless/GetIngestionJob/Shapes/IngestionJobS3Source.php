<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $bucketOwnerAccountId
 * @property string|null $keyPrefix
 */
class IngestionJobS3Source extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     bucketOwnerAccountId?: string|null,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
