<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpsertTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchItemId
 * @property Filter $filter
 * @property array<string, CellInput> $cellsToUpdate
 */
class UpsertRowData extends Shape
{
    /**
     * @param array{
     *     batchItemId: string,
     *     filter: Filter,
     *     cellsToUpdate: array<string, CellInput>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
