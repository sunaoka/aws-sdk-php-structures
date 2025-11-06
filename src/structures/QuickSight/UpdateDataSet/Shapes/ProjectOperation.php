<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Alias
 * @property TransformOperationSource|null $Source
 * @property list<string> $ProjectedColumns
 */
class ProjectOperation extends Shape
{
    /**
     * @param array{
     *     Alias?: string|null,
     *     Source?: TransformOperationSource|null,
     *     ProjectedColumns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
