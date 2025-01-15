<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cellReference
 * @property int|null $column
 * @property string|null $columnName
 * @property int|null $row
 */
class Cell extends Shape
{
    /**
     * @param array{
     *     cellReference?: string|null,
     *     column?: int|null,
     *     columnName?: string|null,
     *     row?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
