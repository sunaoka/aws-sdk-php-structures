<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelName
 * @property string $NewColumnName
 * @property string $NewColumnId
 */
class PivotedLabel extends Shape
{
    /**
     * @param array{
     *     LabelName: string,
     *     NewColumnName: string,
     *     NewColumnId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
