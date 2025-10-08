<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergSchema $Schema
 * @property IcebergPartitionSpec|null $PartitionSpec
 * @property IcebergSortOrder|null $SortOrder
 * @property string $Location
 * @property array<string, string>|null $Properties
 */
class IcebergTableUpdate extends Shape
{
    /**
     * @param array{
     *     Schema: IcebergSchema,
     *     PartitionSpec?: IcebergPartitionSpec|null,
     *     SortOrder?: IcebergSortOrder|null,
     *     Location: string,
     *     Properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
