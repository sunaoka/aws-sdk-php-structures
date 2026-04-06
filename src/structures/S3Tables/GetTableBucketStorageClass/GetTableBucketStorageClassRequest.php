<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketStorageClass;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 */
class GetTableBucketStorageClassRequest extends Request
{
    /**
     * @param array{tableBucketARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
