<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $OrderId
 * @property list<IcebergSortField> $Fields
 */
class IcebergSortOrder extends Shape
{
    /**
     * @param array{
     *     OrderId: int,
     *     Fields: list<IcebergSortField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
