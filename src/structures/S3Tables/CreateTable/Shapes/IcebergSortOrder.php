<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $orderId
 * @property list<IcebergSortField> $fields
 */
class IcebergSortOrder extends Shape
{
    /**
     * @param array{
     *     orderId: int,
     *     fields: list<IcebergSortField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
