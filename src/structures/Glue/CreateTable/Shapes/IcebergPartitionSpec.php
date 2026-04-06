<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IcebergPartitionField> $Fields
 * @property int|null $SpecId
 */
class IcebergPartitionSpec extends Shape
{
    /**
     * @param array{
     *     Fields: list<IcebergPartitionField>,
     *     SpecId?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
