<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PageSize
 * @property int $PageNumber
 */
class PaginationConfiguration extends Shape
{
    /**
     * @param array{
     *     PageSize: int,
     *     PageNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
