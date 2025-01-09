<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Column
 * @property int $Row
 * @property string $ColumnName
 * @property string $CellReference
 */
class Cell extends Shape
{
    /**
     * @param array{
     *     Column?: int,
     *     Row?: int,
     *     ColumnName?: string,
     *     CellReference?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
