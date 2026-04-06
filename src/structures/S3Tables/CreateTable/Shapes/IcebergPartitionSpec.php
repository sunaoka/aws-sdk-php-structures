<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IcebergPartitionField> $fields
 * @property int|null $specId
 */
class IcebergPartitionSpec extends Shape
{
    /**
     * @param array{
     *     fields: list<IcebergPartitionField>,
     *     specId?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
