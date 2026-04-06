<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpdateTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rowId
 * @property array<string, CellInput> $cellsToUpdate
 */
class UpdateRowData extends Shape
{
    /**
     * @param array{
     *     rowId: string,
     *     cellsToUpdate: array<string, CellInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
