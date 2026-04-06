<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchCreateTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchItemId
 * @property array<string, CellInput> $cellsToCreate
 */
class CreateRowData extends Shape
{
    /**
     * @param array{
     *     batchItemId: string,
     *     cellsToCreate: array<string, CellInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
