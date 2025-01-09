<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cellReference
 * @property int $column
 * @property string $columnName
 * @property int $row
 */
class Cell extends Shape
{
    /**
     * @param array{
     *     cellReference?: string,
     *     column?: int,
     *     columnName?: string,
     *     row?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
