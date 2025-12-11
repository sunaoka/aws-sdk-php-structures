<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceColumnId
 * @property string $TargetColumnId
 */
class DataSetColumnIdMapping extends Shape
{
    /**
     * @param array{
     *     SourceColumnId: string,
     *     TargetColumnId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
