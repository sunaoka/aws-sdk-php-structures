<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergSchema $schema
 * @property IcebergPartitionSpec|null $partitionSpec
 * @property IcebergSortOrder|null $writeOrder
 * @property array<string, string>|null $properties
 */
class IcebergMetadata extends Shape
{
    /**
     * @param array{
     *     schema: IcebergSchema,
     *     partitionSpec?: IcebergPartitionSpec|null,
     *     writeOrder?: IcebergSortOrder|null,
     *     properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
