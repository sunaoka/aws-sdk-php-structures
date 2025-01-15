<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketInventoryConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string $Bucket
 * @property 'CSV'|'ORC'|'Parquet' $Format
 * @property string|null $Prefix
 * @property InventoryEncryption|null $Encryption
 */
class InventoryS3BucketDestination extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Bucket: string,
     *     Format: 'CSV'|'ORC'|'Parquet',
     *     Prefix?: string|null,
     *     Encryption?: InventoryEncryption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
