<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketInventoryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $Bucket
 * @property 'CSV'|'ORC'|'Parquet' $Format
 * @property string $Prefix
 * @property InventoryEncryption $Encryption
 */
class InventoryS3BucketDestination extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Bucket: string,
     *     Format: 'CSV'|'ORC'|'Parquet',
     *     Prefix?: string,
     *     Encryption?: InventoryEncryption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
