<?php

namespace Sunaoka\Aws\Structures\S3Tables\PutTableBucketStorageClass;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property Shapes\StorageClassConfiguration $storageClassConfiguration
 */
class PutTableBucketStorageClassRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     storageClassConfiguration: Shapes\StorageClassConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
