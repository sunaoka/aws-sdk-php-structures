<?php

namespace Sunaoka\Aws\Structures\Glue\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FormatVersion
 * @property string|null $TableUuid
 * @property string|null $Location
 * @property array<string, string>|null $Properties
 * @property list<IcebergSchema>|null $Schemas
 * @property int|null $CurrentSchemaId
 * @property int|null $LastColumnId
 * @property list<IcebergPartitionSpec>|null $PartitionSpecs
 * @property int|null $DefaultSpecId
 * @property int|null $LastPartitionId
 * @property list<IcebergSortOrder>|null $SortOrders
 * @property int|null $DefaultSortOrderId
 */
class IcebergTableMetadata extends Shape
{
    /**
     * @param array{
     *     FormatVersion?: string|null,
     *     TableUuid?: string|null,
     *     Location?: string|null,
     *     Properties?: array<string, string>|null,
     *     Schemas?: list<IcebergSchema>|null,
     *     CurrentSchemaId?: int|null,
     *     LastColumnId?: int|null,
     *     PartitionSpecs?: list<IcebergPartitionSpec>|null,
     *     DefaultSpecId?: int|null,
     *     LastPartitionId?: int|null,
     *     SortOrders?: list<IcebergSortOrder>|null,
     *     DefaultSortOrderId?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
