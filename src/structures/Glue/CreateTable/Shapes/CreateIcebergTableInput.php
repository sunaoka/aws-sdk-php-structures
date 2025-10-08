<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 * @property IcebergSchema $Schema
 * @property IcebergPartitionSpec|null $PartitionSpec
 * @property IcebergSortOrder|null $WriteOrder
 * @property array<string, string>|null $Properties
 */
class CreateIcebergTableInput extends Shape
{
    /**
     * @param array{
     *     Location: string,
     *     Schema: IcebergSchema,
     *     PartitionSpec?: IcebergPartitionSpec|null,
     *     WriteOrder?: IcebergSortOrder|null,
     *     Properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
