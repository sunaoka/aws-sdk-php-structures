<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PageSize
 * @property int<0, max> $PageNumber
 */
class PaginationConfiguration extends Shape
{
    /**
     * @param array{
     *     PageSize: int,
     *     PageNumber: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
