<?php

namespace Sunaoka\Aws\Structures\Glue\BatchCreatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Column
 * @property int $SortOrder
 */
class Order extends Shape
{
    /**
     * @param array{
     *     Column: string,
     *     SortOrder: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
