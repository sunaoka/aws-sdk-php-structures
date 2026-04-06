<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergSchema|null $schema
 * @property IcebergSchemaV2|null $schemaV2
 * @property IcebergPartitionSpec|null $partitionSpec
 * @property IcebergSortOrder|null $writeOrder
 * @property array<string, string>|null $properties
 */
class IcebergMetadata extends Shape
{
    /**
     * @param array{
     *     schema?: IcebergSchema|null,
     *     schemaV2?: IcebergSchemaV2|null,
     *     partitionSpec?: IcebergPartitionSpec|null,
     *     writeOrder?: IcebergSortOrder|null,
     *     properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
