<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Column
 * @property int<0, 1> $SortOrder
 */
class Order extends Shape
{
    /**
     * @param array{
     *     Column: string,
     *     SortOrder: int<0, 1>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
