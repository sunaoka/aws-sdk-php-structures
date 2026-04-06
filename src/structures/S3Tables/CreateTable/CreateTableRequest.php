<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 * @property 'ICEBERG' $format
 * @property Shapes\TableMetadata|null $metadata
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property Shapes\StorageClassConfiguration|null $storageClassConfiguration
 * @property array<string, string>|null $tags
 */
class CreateTableRequest extends Request
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string,
     *     format: 'ICEBERG',
     *     metadata?: Shapes\TableMetadata|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     storageClassConfiguration?: Shapes\StorageClassConfiguration|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
