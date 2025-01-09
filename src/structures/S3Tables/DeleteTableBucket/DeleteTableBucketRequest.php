<?php

namespace Sunaoka\Aws\Structures\S3Tables\DeleteTableBucket;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 */
class DeleteTableBucketRequest extends Request
{
    /**
     * @param array{tableBucketARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
