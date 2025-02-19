<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CSV'|'Parquet' $Format
 * @property 'V_1' $OutputSchemaVersion
 * @property string $AccountId
 * @property string $Arn
 * @property string|null $Prefix
 * @property StorageLensDataExportEncryption|null $Encryption
 */
class S3BucketDestination extends Shape
{
    /**
     * @param array{
     *     Format: 'CSV'|'Parquet',
     *     OutputSchemaVersion: 'V_1',
     *     AccountId: string,
     *     Arn: string,
     *     Prefix?: string|null,
     *     Encryption?: StorageLensDataExportEncryption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
