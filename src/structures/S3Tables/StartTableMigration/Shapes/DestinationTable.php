<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string $name
 * @property EncryptionConfiguration|null $encryptionConfiguration
 * @property StorageClassConfiguration|null $storageClassConfiguration
 * @property array<string, string>|null $tags
 * @property MigrationTableProperties|null $properties
 * @property IcebergSchemaV2|null $schema
 * @property IcebergSortOrder|null $icebergSortOrder
 */
class DestinationTable extends Shape
{
    /**
     * @param array{
     *     tableBucketARN: string,
     *     namespace: string,
     *     name: string,
     *     encryptionConfiguration?: EncryptionConfiguration|null,
     *     storageClassConfiguration?: StorageClassConfiguration|null,
     *     tags?: array<string, string>|null,
     *     properties?: MigrationTableProperties|null,
     *     schema?: IcebergSchemaV2|null,
     *     icebergSortOrder?: IcebergSortOrder|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
